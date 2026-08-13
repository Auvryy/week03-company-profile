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
    </script>
</head>
<body class="bg-white text-ink font-sans antialiased">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
