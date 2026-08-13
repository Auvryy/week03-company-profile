<header class="sticky top-0 z-50 bg-ink text-white border-b border-white/10">
    <nav class="max-w-6xl mx-auto px-6 flex items-center justify-between h-16">

        <a href="{{ url('/') }}" class="font-mono font-bold text-lg tracking-tight flex items-center gap-2">
            <span class="w-2 h-2 bg-white inline-block"></span>
            OBSIDIAN<span class="text-muted">_</span>SECURITY
        </a>

        <div class="hidden md:flex items-center gap-8 font-mono text-sm uppercase tracking-wide">
            <a href="{{ url('/') }}" class="hover:text-cyan-400 transition-colors {{ request()->is('/') ? 'text-white' : 'text-white/60' }}">Home</a>
            <a href="{{ url('/about') }}" class="hover:text-cyan-400 transition-colors {{ request()->is('about') ? 'text-white' : 'text-white/60' }}">About</a>
            <a href="{{ url('/services') }}" class="hover:text-cyan-400 transition-colors {{ request()->is('services') ? 'text-white' : 'text-white/60' }}">Services</a>
            <a href="{{ url('/contact') }}" class="hover:text-cyan-400 transition-colors {{ request()->is('contact') ? 'text-white' : 'text-white/60' }}">Contact</a>
        </div>

        <a href="{{ url('/contact') }}" class="hidden md:inline-block font-mono text-xs uppercase tracking-wide border border-white/30 px-4 py-2 hover:bg-cyan-400 hover:border-cyan-400 hover:text-ink transition-colors duration-300">
            Get Protected
        </a>

    </nav>
</header>
