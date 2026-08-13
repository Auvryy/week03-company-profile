@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<!-- Page Header -->
<section class="bg-ink text-white">
    <div class="max-w-6xl mx-auto px-6 py-24">
        <p class="hero-in hero-in-1 font-mono text-xs uppercase tracking-widest text-white/40 mb-4">// get in touch</p>
        <h1 class="hero-in hero-in-2 font-mono font-extrabold text-4xl md:text-5xl">Let's talk security.</h1>
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-16">

    <!-- Contact Form (UI only) -->
    <div class="reveal">
        <p class="font-mono text-xs uppercase tracking-widest text-muted mb-6">// 01 send a message</p>

        <form action="https://github.com/Auvryy" class="space-y-6">
            @csrf
            <div>
                <label class="block font-mono text-xs uppercase tracking-wide text-muted mb-2">Name</label>
                <input type="text" name="name" class="w-full border border-hairline hover:border-cyan-300 px-4 py-3 focus:outline-none focus:border-cyan-500 transition-colors duration-300" placeholder="Juan Dela Cruz">
            </div>
            <div>
                <label class="block font-mono text-xs uppercase tracking-wide text-muted mb-2">Email</label>
                <input type="email" name="email" class="w-full border border-hairline hover:border-cyan-300 px-4 py-3 focus:outline-none focus:border-cyan-500 transition-colors duration-300" placeholder="you@company.com">
            </div>
            <div>
                <label class="block font-mono text-xs uppercase tracking-wide text-muted mb-2">Subject</label>
                <input type="text" name="subject" class="w-full border border-hairline hover:border-cyan-300 px-4 py-3 focus:outline-none focus:border-cyan-500 transition-colors duration-300" placeholder="Security assessment request">
            </div>
            <div>
                <label class="block font-mono text-xs uppercase tracking-wide text-muted mb-2">Message</label>
                <textarea name="message" rows="5" class="w-full border border-hairline hover:border-cyan-300 px-4 py-3 focus:outline-none focus:border-cyan-500 transition-colors duration-300" placeholder="Tell us about your systems..."></textarea>
            </div>
            <button type="submit" class="font-mono text-sm uppercase tracking-wide bg-ink text-white px-8 py-4 hover:bg-cyan-400 hover:text-ink transition-colors duration-300">
                Send message →
            </button>
        </form>
    </div>

    <!-- Company Info -->
    <div class="reveal" style="transition-delay: 0.15s;">
        <p class="font-mono text-xs uppercase tracking-widest text-muted mb-6">// 02 contact information</p>

        <div class="space-y-6 mb-10">
            <div>
                <p class="font-mono text-xs text-muted uppercase tracking-wide mb-1">Address</p>
                <p>Pila, Laguna, Philippines</p>
            </div>
            <div>
                <p class="font-mono text-xs text-muted uppercase tracking-wide mb-1">Email</p>
                <p>hello@obsidiansecurity.com</p>
            </div>
            <div>
                <p class="font-mono text-xs text-muted uppercase tracking-wide mb-1">Phone</p>
                <p>+63 912 345 6789</p>
            </div>
            <div>
                <p class="font-mono text-xs text-muted uppercase tracking-wide mb-1">Follow us</p>
                <div class="flex gap-4 font-mono text-sm">
                    <a href="https://github.com/Auvryy" target="_blank" rel="noopener" class="underline underline-offset-4 hover:text-violet-500 transition-colors duration-300">GitHub</a>
                    <a href="https://www.linkedin.com/in/andy-sarne/" target="_blank" rel="noopener" class="underline underline-offset-4 hover:text-sky-500 transition-colors duration-300">LinkedIn</a>
                </div>
            </div>
        </div>

        <!-- Embedded Map -->
        <div class="border border-hairline hover:border-cyan-400 aspect-video transition-colors duration-300">
            <iframe
                src="https://www.google.com/maps?q=Laguna,Pila,Philippines&output=embed"
                class="w-full h-full"
                style="border:0;"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

</section>

@endsection
