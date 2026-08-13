@extends('layouts.app')

@section('title', 'Services')

@section('content')

<!-- Page Header -->
<section class="bg-ink text-white">
    <div class="max-w-6xl mx-auto px-6 py-24">
        <p class="hero-in hero-in-1 font-mono text-xs uppercase tracking-widest text-white/40 mb-4">// what we do</p>
        <h1 class="hero-in hero-in-2 font-mono font-extrabold text-4xl md:text-5xl">Six layers of defense.</h1>
    </div>
</section>

<!-- Services Grid -->
<section class="max-w-6xl mx-auto px-6 py-24">
    <div class="reveal grid md:grid-cols-3 gap-px bg-hairline border border-hairline">

        <div class="group bg-white p-8 border-b-2 border-transparent hover:border-cyan-400 transition-colors duration-300">
            <div class="w-12 h-12 border border-hairline group-hover:border-cyan-400 flex items-center justify-center mb-6 transition-colors duration-300">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-ink group-hover:text-cyan-500 transition-colors duration-300">
                    <path d="M12 2 L20 5 V11 C20 16 16.5 20 12 22 C7.5 20 4 16 4 11 V5 Z" />
                    <path d="M9 12 L11 14 L15 9" />
                </svg>
            </div>
            <p class="font-mono text-xs text-muted mb-2">01</p>
            <h3 class="font-bold text-lg mb-2 group-hover:text-cyan-600 transition-colors duration-300">Threat Detection & Monitoring</h3>
            <p class="text-muted text-sm leading-relaxed">24/7 monitoring across your infrastructure to catch intrusions the moment they happen, not after.</p>
        </div>

        <div class="group bg-white p-8 border-b-2 border-transparent hover:border-violet-400 transition-colors duration-300">
            <div class="w-12 h-12 border border-hairline group-hover:border-violet-400 flex items-center justify-center mb-6 transition-colors duration-300">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-ink group-hover:text-violet-500 transition-colors duration-300">
                    <circle cx="10" cy="10" r="6" />
                    <line x1="14.5" y1="14.5" x2="20" y2="20" />
                </svg>
            </div>
            <p class="font-mono text-xs text-muted mb-2">02</p>
            <h3 class="font-bold text-lg mb-2 group-hover:text-violet-600 transition-colors duration-300">Penetration Testing</h3>
            <p class="text-muted text-sm leading-relaxed">We break into your systems before attackers do, then hand you a clear map of every weak point.</p>
        </div>

        <div class="group bg-white p-8 border-b-2 border-transparent hover:border-amber-400 transition-colors duration-300">
            <div class="w-12 h-12 border border-hairline group-hover:border-amber-400 flex items-center justify-center mb-6 transition-colors duration-300">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-ink group-hover:text-amber-500 transition-colors duration-300">
                    <path d="M12 3 L22 20 H2 Z" />
                    <line x1="12" y1="9" x2="12" y2="14" />
                    <circle cx="12" cy="17" r="0.5" fill="currentColor" />
                </svg>
            </div>
            <p class="font-mono text-xs text-muted mb-2">03</p>
            <h3 class="font-bold text-lg mb-2 group-hover:text-amber-600 transition-colors duration-300">Incident Response</h3>
            <p class="text-muted text-sm leading-relaxed">When something does get through, our response team contains and resolves it fast, with a full report after.</p>
        </div>

        <div class="group bg-white p-8 border-b-2 border-transparent hover:border-emerald-400 transition-colors duration-300">
            <div class="w-12 h-12 border border-hairline group-hover:border-emerald-400 flex items-center justify-center mb-6 transition-colors duration-300">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-ink group-hover:text-emerald-500 transition-colors duration-300">
                    <path d="M7 16a4 4 0 0 1 0-8 5 5 0 0 1 9.6-1.5A4.5 4.5 0 0 1 17 16H7Z" />
                </svg>
            </div>
            <p class="font-mono text-xs text-muted mb-2">04</p>
            <h3 class="font-bold text-lg mb-2 group-hover:text-emerald-600 transition-colors duration-300">Cloud Security</h3>
            <p class="text-muted text-sm leading-relaxed">Hardened cloud architecture and access controls that scale without opening new attack surfaces.</p>
        </div>

        <div class="group bg-white p-8 border-b-2 border-transparent hover:border-rose-400 transition-colors duration-300">
            <div class="w-12 h-12 border border-hairline group-hover:border-rose-400 flex items-center justify-center mb-6 transition-colors duration-300">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-ink group-hover:text-rose-500 transition-colors duration-300">
                    <circle cx="6" cy="6" r="2" />
                    <circle cx="18" cy="6" r="2" />
                    <circle cx="12" cy="18" r="2" />
                    <line x1="7.5" y1="7" x2="11" y2="16.3" />
                    <line x1="16.5" y1="7" x2="13" y2="16.3" />
                    <line x1="8" y1="6" x2="16" y2="6" />
                </svg>
            </div>
            <p class="font-mono text-xs text-muted mb-2">05</p>
            <h3 class="font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors duration-300">Network Security</h3>
            <p class="text-muted text-sm leading-relaxed">Segmented, monitored networks that limit how far an attacker can move even if they get in.</p>
        </div>

        <div class="group bg-white p-8 border-b-2 border-transparent hover:border-sky-400 transition-colors duration-300">
            <div class="w-12 h-12 border border-hairline group-hover:border-sky-400 flex items-center justify-center mb-6 transition-colors duration-300">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-ink group-hover:text-sky-500 transition-colors duration-300">
                    <rect x="5" y="4" width="14" height="17" rx="1" />
                    <path d="M9 4V3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1" />
                    <path d="M9 12l2 2 4-4" />
                </svg>
            </div>
            <p class="font-mono text-xs text-muted mb-2">06</p>
            <h3 class="font-bold text-lg mb-2 group-hover:text-sky-600 transition-colors duration-300">Security Consulting & Compliance</h3>
            <p class="text-muted text-sm leading-relaxed">Audits and roadmaps that get you compliant with industry standards without the guesswork.</p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="bg-ink text-white">
    <div class="reveal max-w-6xl mx-auto px-6 py-20 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Not sure which service you need?</h2>
        <p class="text-white/60 mb-8 max-w-lg mx-auto">Talk to us and we'll point you to exactly where your risk is highest.</p>
        <a href="{{ url('/contact') }}" class="font-mono text-sm uppercase tracking-wide bg-white text-ink px-8 py-4 inline-block hover:bg-white/90 transition-colors">
            Contact us →
        </a>
    </div>
</section>

@endsection
