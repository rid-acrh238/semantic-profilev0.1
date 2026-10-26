@extends('layouts.guest')

@section('title', 'Login | Semantic Student Profile')

@section('content')
    <main class="login-page">
        <div class="login-layout">
            <aside class="login-intro">
                {{-- animmasi --}}
                <div class="network-bg" aria-hidden="true">
                    <svg viewBox="0 0 600 700" preserveAspectRatio="xMidYMid slice">
                        <g class="network-lines">
                            <path d="M30 100 L150 180 L270 100 L390 200 L540 120" />
                            <path d="M150 180 L120 330 L270 400 L390 200" />
                            <path d="M270 100 L300 250 L480 330 L540 120" />
                            <path d="M120 330 L50 500 L220 570 L270 400" />
                            <path d="M270 400 L420 500 L480 330" />
                            <path d="M220 570 L420 500 L550 610" />
                            <path d="M300 250 L270 400 L420 500" />
                            <path d="M390 200 L480 330 L420 500" />
                            <path d="M30 100 L120 330 L50 500" />
                        </g>
                        <g class="network-nodes">
                            <circle cx="30" cy="100" r="5" />
                            <circle cx="150" cy="180" r="7" />
                            <circle cx="270" cy="100" r="5" />
                            <circle cx="390" cy="200" r="8" />
                            <circle cx="540" cy="120" r="5" />
                            <circle cx="120" cy="330" r="6" />
                            <circle cx="300" cy="250" r="5" />
                            <circle cx="480" cy="330" r="7" />
                            <circle cx="270" cy="400" r="8" />
                            <circle cx="50" cy="500" r="5" />
                            <circle cx="220" cy="570" r="7" />
                            <circle cx="420" cy="500" r="6" />
                            <circle cx="550" cy="610" r="5" />
                        </g>

                        <g class="network-particles">
                            <circle r="4">
                                <animateMotion
                                dur="5s"
                                repeatCount="indefinite"
                                path="M30 100 L150 180 L270 100 L390 200 L540 120"
                                />
                            </circle>
                            <circle r="3">
                                <animateMotion
                                dur="7s"
                                repeatCount="indefinite"
                                path="M120 330 L270 400 L420 500 L550 610"
                                />
                            </circle>
                            <circle r="3">
                                <animateMotion
                                dur="6s"
                                repeatCount="indefinite"
                                path="M300 250 L480 330 L420 500"
                                />
                            </circle>
                        </g>
                    </svg>
                </div>
                <div class="brand">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="Logo Semantic Student Profile"
                    >
                </div>

                <div class="intro-copy">
                    <p class="eyebrow">STUDENT PROFILE MONITORING</p>

                    <h1>Semantic Student Profile</h1>

                    <p>
                        Kenali profil mahasiswa dan pantau
                        perkembangannya secara berkala dalam
                        satu sistem terintegrasi.
                    </p>
                </div>

                <p class="intro-footer">
                    Sistem Monitoring Profil Mahasiswa
                </p>
            </aside>
            {{-- animasi kanan --}}

            <section class="login-panel">
                <div class="geometry-bg" aria-hidden="true">
                    <svg viewBox="0 0 500 700" preserveAspectRatio="xMidYMid slice">
                        <circle class="geo-ring" cx="390" cy="130" r="95" />
                        <circle class="geo-ring geo-ring-small" cx="390" cy="130" r="65" />
                        <rect
                        class="geo-square"
                        x="65" y="470"
                        width="85" height="85"
                        rx="12"
                        />
                        <polygon
                        class="geo-triangle"
                        points="390,430 465,560 315,560"
                        />

                        <circle class="geo-orb" cx="390" cy="35" r="7" />
                        <circle class="geo-orb geo-orb-two" cx="110" cy="250" r="5" />
                        <path class="geo-line" d="M0 180 L180 0" />
                        <path class="geo-line" d="M320 700 L500 520" />
                    </svg>
                </div>
                @include('components.auth.login-form')
            </section>
        </div>
    </main>
@endsection
