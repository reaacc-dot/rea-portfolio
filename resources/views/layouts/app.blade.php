<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Indah Christiani Sinaga' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FAF9F6] text-[#20263A]">
    <x-navbar />
    @yield('content')

    
<footer class="relative overflow-hidden bg-[#3155D8] text-[#FAF9F6]">
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        <div class="border-t border-white/15 py-20 lg:py-24">
            <div class="grid gap-12 lg:grid-cols-[1.3fr_0.7fr] lg:items-end">

                <!-- BRAND -->
                <div>
                    <div class="flex items-center gap-3">
                        <span class="h-px w-10 bg-[#FAF9F6]/70"></span>
                        <p class="text-[10px] uppercase tracking-[0.3em] text-[#FAF9F6]/65">
                            Thanks for stopping by
                        </p>
                    </div>

                    <h2 class="mt-8 max-w-4xl text-[16vw] font-semibold leading-[0.78] tracking-[-0.08em] text-[#FAF9F6] sm:text-[9rem] lg:text-[11rem]">
                        REA<span class="font-serif italic text-[#8C3040]">.</span>
                    </h2>

                    <p class="mt-10 max-w-md text-sm leading-7 text-[#FAF9F6]/75 sm:text-base">
                        Building, learning, and exploring ideas
                        through technology and meaningful experiences.
                    </p>
                </div>

                <!-- NAVIGATION -->
                <div class="lg:pb-3">
                    <p class="text-[10px] uppercase tracking-[0.25em] text-[#FAF9F6]/60">
                        Explore
                    </p>

                    <nav class="mt-5 flex flex-col gap-3">
                        @foreach ([
                            'Home' => '/',
                            'About' => '/about',
                            'Projects' => '/projects',
                            'Works' => '/works/articles',
                            'Contact' => '/contact'
                        ] as $label => $url)
                            <a href="{{ $url }}"
                               class="group flex items-center justify-between border-b border-white/15 pb-3 text-sm text-[#FAF9F6]/75 transition duration-300 hover:text-[#FAF9F6]">
                                <span>{{ $label }}</span>
                                <span class="translate-x-[-5px] text-[#FAF9F6] opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    ↗
                                </span>
                            </a>
                        @endforeach
                    </nav>
                </div>

            </div>
        </div>

<div class="flex flex-col gap-5 border-t border-white/15 py-7 text-[11px] sm:flex-row sm:items-center sm:justify-between">

    <p class="text-[#FAF9F6]/55">
        © {{ date('Y') }} Rea. All rights reserved.
    </p>

    <div class="flex items-center justify-end gap-6">

        <!-- Instagram -->
        <a href="https://www.instagram.com/reandaa_s/"
           target="_blank" rel="noopener noreferrer"
           aria-label="Instagram"
           class="text-[#FAF9F6]/65 transition hover:text-[#FAF9F6]">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2Zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5a4.25 4.25 0 0 0 4.25 4.25h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5a4.25 4.25 0 0 0-4.25-4.25h-8.5ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Z"/>
            </svg>
        </a>

        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/in/reanda-sinaga-5512162a4/"
           target="_blank" rel="noopener noreferrer"
           aria-label="LinkedIn"
           class="text-[#FAF9F6]/65 transition hover:text-[#FAF9F6]">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M5.2 3a2.2 2.2 0 1 0 0 4.4 2.2 2.2 0 0 0 0-4.4ZM3.3 9h3.8v12H3.3V9Zm6.1 0H13v1.65h.05A3.95 3.95 0 0 1 16.6 8.7c3.9 0 4.6 2.55 4.6 5.85V21h-3.8v-5.7c0-1.36-.02-3.1-1.9-3.1-1.9 0-2.2 1.48-2.2 3V21H9.4V9Z"/>
            </svg>
        </a>

        <!-- Email -->
        <a href="mailto:reandasinaga@gmail.com"
           aria-label="Email"
           class="text-[#FAF9F6]/65 transition hover:text-[#FAF9F6]">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                <rect x="3" y="5" width="18" height="14" rx="2"/>
                <path d="m3 7 9 6 9-6"/>
            </svg>
        </a>

        <!-- WhatsApp -->
        <a href="https://wa.me/628776973302"
           target="_blank" rel="noopener noreferrer"
           aria-label="WhatsApp"
           class="text-[#FAF9F6]/65 transition hover:text-[#FAF9F6]">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2a9.8 9.8 0 0 0-8.45 14.77L2.2 22l5.38-1.41A9.8 9.8 0 1 0 12 2Zm0 1.6a8.2 8.2 0 0 1 0 16.4 8.1 8.1 0 0 1-4.16-1.14l-.3-.18-3.2.84.86-3.12-.2-.32A8.2 8.2 0 0 1 12 3.6Z"/>
            </svg>
        </a>

        <span class="h-4 w-px bg-white/20"></span>

        <span class="text-[11px] text-[#FAF9F6]/50">
            Built with Laravel
        </span>

    </div>
</div>


        </div>

    </div>
</footer>

    <button
        id="back-to-top"
        type="button"
        aria-label="Back to top"
        class="fixed bottom-6 right-6 z-[100] flex translate-y-5 items-center gap-3 rounded-full border border-[#3155D8]/20 bg-[#FAF9F6]/95 px-4 py-3 text-[10px] font-medium uppercase tracking-[0.18em] text-[#20263A]/65 opacity-0 shadow-lg shadow-[#20263A]/10 backdrop-blur-md transition-all duration-300 pointer-events-none hover:border-[#3155D8] hover:bg-[#3155D8] hover:text-[#FAF9F6] sm:bottom-8 sm:right-8"
    >
        <span>Back to top</span>
        <span class="text-sm">↑</span>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const backToTop = document.getElementById('back-to-top');
            if (!backToTop) return;

            function updateBackToTop() {
                if (window.scrollY > 500) {
                    backToTop.classList.remove('translate-y-5', 'opacity-0', 'pointer-events-none');
                    backToTop.classList.add('translate-y-0', 'opacity-100');
                } else {
                    backToTop.classList.remove('translate-y-0', 'opacity-100');
                    backToTop.classList.add('translate-y-5', 'opacity-0', 'pointer-events-none');
                }
            }

            window.addEventListener('scroll', updateBackToTop, { passive: true });
            backToTop.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            updateBackToTop();
        });
    </script>
</body>
</html>