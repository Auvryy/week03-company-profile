@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero -->
<section class="relative bg-ink text-white overflow-hidden">

    <!-- Background video -->
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-40">
        <source src="{{ asset('videos/globe.mp4') }}" type="video/mp4">
    </video>

    <!-- Dark overlay to keep text readable -->
    <div class="absolute inset-0 bg-ink/70"></div>

    <div class="relative max-w-6xl mx-auto px-6 py-32">
        <p class="hero-in hero-in-1 font-mono text-xs uppercase tracking-widest text-white/40 mb-6">// system status: secure</p>
        <h1 class="hero-in hero-in-2 font-mono font-extrabold text-4xl md:text-6xl leading-tight max-w-3xl">
            We defend what you can't afford to lose.
        </h1>
        <p class="hero-in hero-in-3 text-white/60 mt-6 max-w-xl leading-relaxed">
            Obsidian Security is a cybersecurity partner for businesses that treat data protection as a first principle, not an afterthought. From threat detection to incident response, we keep your systems standing.
        </p>
        <div class="hero-in hero-in-4 mt-10 flex gap-4">
            <a href="{{ url('/contact') }}" class="font-mono text-sm uppercase tracking-wide bg-white text-ink px-6 py-3 hover:bg-white/90 transition-colors">
                Talk to us →
            </a>
            <a href="{{ url('/services') }}" class="font-mono text-sm uppercase tracking-wide border border-white/30 px-6 py-3 hover:border-white transition-colors">
                View services
            </a>
        </div>
    </div>
</section>

<!-- Company Intro -->
<section class="max-w-6xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-12 items-center">
    <div class="reveal">
        <p class="font-mono text-xs uppercase tracking-widest text-muted mb-4">// 01 who we are</p>
        <h2 class="text-3xl font-bold mb-4">Security built by people who've seen what happens without it.</h2>
        <p class="text-muted leading-relaxed">
            Founded by engineers who spent years responding to breaches, Obsidian Security exists to get ahead of the incident instead of cleaning up after it. We work with startups and enterprises alike, treating every client's infrastructure like our own.
        </p>
    </div>
    <div class="reveal border border-hairline p-8" style="transition-delay: 0.15s;">
        <p class="font-mono text-6xl font-extrabold">99.9<span class="text-muted text-3xl">%</span></p>
        <p class="text-muted text-sm mt-2">uptime across all monitored client systems</p>
    </div>
</section>

<!-- Featured Services -->
<section class="bg-white border-t border-hairline">
    <div class="max-w-6xl mx-auto px-6 py-24">
        <p class="reveal font-mono text-xs uppercase tracking-widest text-muted mb-4">// 02 featured services</p>
        <h2 class="reveal text-3xl font-bold mb-12">Where we protect you</h2>

        <div class="reveal grid md:grid-cols-3 gap-px bg-hairline border border-hairline" style="transition-delay: 0.1s;">
            <div class="bg-white p-8">
                <p class="font-mono text-xs text-muted mb-3">01</p>
                <h3 class="font-bold text-lg mb-2">Threat Detection</h3>
                <p class="text-muted text-sm leading-relaxed">Real-time monitoring that catches intrusions before they become incidents.</p>
            </div>
            <div class="bg-white p-8">
                <p class="font-mono text-xs text-muted mb-3">02</p>
                <h3 class="font-bold text-lg mb-2">Cloud Solutions</h3>
                <p class="text-muted text-sm leading-relaxed">Hardened cloud architecture that scales without opening new attack surfaces.</p>
            </div>
            <div class="bg-white p-8">
                <p class="font-mono text-xs text-muted mb-3">03</p>
                <h3 class="font-bold text-lg mb-2">IT Consulting</h3>
                <p class="text-muted text-sm leading-relaxed">Straight answers on where your infrastructure is exposed, and how to fix it.</p>
            </div>
        </div>

        <a href="{{ url('/services') }}" class="inline-block mt-8 font-mono text-sm uppercase tracking-wide underline underline-offset-4 hover:text-muted">
            See all 6 services →
        </a>
    </div>
</section>

<!-- CTA -->
<section class="bg-ink text-white">
    <div class="reveal max-w-6xl mx-auto px-6 py-20 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to lock things down?</h2>
        <p class="text-white/60 mb-8 max-w-lg mx-auto">Get a free security assessment and see exactly where your systems stand.</p>
        <a href="{{ url('/contact') }}" class="font-mono text-sm uppercase tracking-wide bg-white text-ink px-8 py-4 inline-block hover:bg-white/90 transition-colors">
            Request assessment →
        </a>
    </div>
</section>

@endsection
