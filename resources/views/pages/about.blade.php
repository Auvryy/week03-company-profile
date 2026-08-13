@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- Page Header -->
<section class="bg-ink text-white">
    <div class="max-w-6xl mx-auto px-6 py-24">
        <p class="hero-in hero-in-1 font-mono text-xs uppercase tracking-widest text-white/40 mb-4">// about us</p>
        <h1 class="hero-in hero-in-2 font-mono font-extrabold text-4xl md:text-5xl">Built to outlast the threat.</h1>
    </div>
</section>

<!-- History -->
<section class="max-w-6xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-12">
    <div class="reveal">
        <p class="font-mono text-xs uppercase tracking-widest text-muted mb-4">// 01 our history</p>
        <h2 class="text-3xl font-bold mb-4">From incident response to prevention.</h2>
    </div>
    <div class="reveal" style="transition-delay: 0.15s;">
        <p class="text-muted leading-relaxed mb-4">
            Obsidian Security started in 2020 as a small team of incident responders, called in after the damage was already done. Cleaning up the same preventable mistakes again and again taught us one thing: security has to be built in from day one, not bolted on after a breach.
        </p>
        <p class="text-muted leading-relaxed">
            Today we work with startups and established enterprises across the region, helping them build infrastructure that can take a hit and keep standing.
        </p>
    </div>
</section>

<!-- Mission & Vision -->
<section class="bg-white border-t border-hairline">
    <div class="reveal max-w-6xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-px bg-hairline border border-hairline">
        <div class="bg-white p-10">
            <p class="font-mono text-xs uppercase tracking-widest text-muted mb-4">// 02 mission</p>
            <p class="text-xl leading-relaxed">To make world-class security accessible to every business, not just the ones with enterprise budgets.</p>
        </div>
        <div class="bg-white p-10">
            <p class="font-mono text-xs uppercase tracking-widest text-muted mb-4">// 03 vision</p>
            <p class="text-xl leading-relaxed">A digital landscape where businesses can grow without fear of what's watching from the shadows.</p>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="max-w-6xl mx-auto px-6 py-24">
    <p class="reveal font-mono text-xs uppercase tracking-widest text-muted mb-4">// 04 core values</p>
    <h2 class="reveal text-3xl font-bold mb-12">What we don't compromise on</h2>

    <div class="reveal grid md:grid-cols-4 gap-px bg-hairline border border-hairline" style="transition-delay: 0.1s;">
        <div class="bg-white p-6">
            <p class="font-mono text-xs text-muted mb-3">01</p>
            <h3 class="font-bold mb-2">Vigilance</h3>
            <p class="text-muted text-sm leading-relaxed">Threats don't sleep, so neither does our monitoring.</p>
        </div>
        <div class="bg-white p-6">
            <p class="font-mono text-xs text-muted mb-3">02</p>
            <h3 class="font-bold mb-2">Integrity</h3>
            <p class="text-muted text-sm leading-relaxed">We tell clients the truth about their exposure, not what's comfortable.</p>
        </div>
        <div class="bg-white p-6">
            <p class="font-mono text-xs text-muted mb-3">03</p>
            <h3 class="font-bold mb-2">Precision</h3>
            <p class="text-muted text-sm leading-relaxed">In security, "close enough" is a vulnerability.</p>
        </div>
        <div class="bg-white p-6">
            <p class="font-mono text-xs text-muted mb-3">04</p>
            <h3 class="font-bold mb-2">Transparency</h3>
            <p class="text-muted text-sm leading-relaxed">Clear reporting, no jargon walls, no hidden findings.</p>
        </div>
    </div>
</section>

<!-- Team -->
<section class="bg-ink text-white">
    <div class="max-w-6xl mx-auto px-6 py-24">
        <p class="reveal font-mono text-xs uppercase tracking-widest text-white/40 mb-4">// 05 the team</p>
        <h2 class="reveal text-3xl font-bold mb-12">People behind the perimeter</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="reveal">
                <div class="w-full aspect-square border border-white/10 overflow-hidden mb-4">
                    <img src="{{ asset('images/evernight.jpg') }}" alt="Evernight" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500">
                </div>
                <h3 class="font-bold">Evernight</h3>
                <p class="text-white/50 text-sm font-mono uppercase tracking-wide">Founder / CEO</p>
            </div>
            <div class="reveal" style="transition-delay: 0.1s;">
                <div class="w-full aspect-square border border-white/10 overflow-hidden mb-4">
                    <img src="{{ asset('images/jingliu.jpg') }}" alt="Jingliu" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500">
                </div>
                <h3 class="font-bold">Jingliu</h3>
                <p class="text-white/50 text-sm font-mono uppercase tracking-wide">Head of Threat Intelligence</p>
            </div>
            <div class="reveal" style="transition-delay: 0.2s;">
                <div class="w-full aspect-square border border-white/10 overflow-hidden mb-4">
                    <img src="{{ asset('images/hysilens.jpg') }}" alt="Hysilens" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500">
                </div>
                <h3 class="font-bold">Hysilens</h3>
                <p class="text-white/50 text-sm font-mono uppercase tracking-wide">Lead Security Engineer</p>
            </div>
        </div>
    </div>
</section>

@endsection
