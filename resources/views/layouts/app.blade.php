<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') | Obsidian Security</title>

    <!-- Fonts: JetBrains Mono for headings/terminal feel, Inter for body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        mono: ['JetBrains Mono', 'monospace'],
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        ink: '#0A0A0A',
                        surface: '#141414',
                        hairline: '#E4E4E4',
                        muted: '#6B6B6B',
                    },
                }
            }
        }
        document.addEventListener('DOMContentLoaded', () => {
            const revealEls = document.querySelectorAll('.reveal');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            revealEls.forEach(el => observer.observe(el));
        });
    </script>
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .hero-in {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }
        .hero-in-1 { animation-delay: 0.1s; }
        .hero-in-2 { animation-delay: 0.25s; }
        .hero-in-3 { animation-delay: 0.4s; }
        .hero-in-4 { animation-delay: 0.55s; }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal.reveal-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Respect users who've asked their OS/browser to reduce motion */
        @media (prefers-reduced-motion: reduce) {
            .hero-in, .reveal {
                opacity: 1 !important;
                transform: none !important;
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>
<body class="bg-white text-ink font-sans antialiased">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
