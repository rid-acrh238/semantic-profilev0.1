<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    public function create(): Response
    {
        // anti cache:V
        return response()
        ->view('auth.login')
        ->withHeaders([
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'identity' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        $identity = $credentials['identity'];

        $field = filter_var($identity, FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'nim';

        $authenticated = Auth::attempt([
            $field => $identity,
            'password' => $credentials['password'],
        ], $request->boolean('remember'));

        if (! $authenticated) {
            throw ValidationException::withMessages([
                'identity' => 'Identitas atau password tidak valid.',
            ]);
        }

        $request->session()->regenerate();

        $user = $request->user();

        return match ($user->role) {
            'admin' => redirect()->route('admin.dashboard'),
            'mahasiswa' => redirect()->route('mahasiswa.dashboard'),
            default => $this->rejectAuthenticatedUser($request),
        };
    }

    private function rejectAuthenticatedUser(
        Request $request
    ): RedirectResponse {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        abort(403, 'Role akun tidak dikenali.');
    }
}
