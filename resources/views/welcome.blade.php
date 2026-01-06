<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            color-scheme: dark;
        }
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-black via-neutral-900 to-neutral-950 text-neutral-100">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(255,255,255,0.08),_transparent_35%),radial-gradient(circle_at_bottom_right,_rgba(255,255,255,0.04),_transparent_30%)]"></div>
    <header class="relative z-10 border-b border-neutral-800/70">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
            <div class="flex items-center gap-3">
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-neutral-800 text-sm font-semibold tracking-tight text-white">LK</span>
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-neutral-400">Laravel Kit</p>
                    <p class="text-lg font-semibold">{{ config('app.name', 'Laravel') }}</p>
                </div>
            </div>
            @if (Route::has('login'))
                <nav class="flex items-center gap-3 text-sm">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="rounded-full border border-neutral-700/60 px-4 py-2 transition hover:border-white hover:bg-white/10">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="rounded-full border border-neutral-700/60 px-4 py-2 transition hover:border-white hover:bg-white/10">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="rounded-full bg-white px-4 py-2 font-semibold text-black transition hover:scale-[1.01]">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <main class="relative z-10 mx-auto flex max-w-6xl flex-col gap-10 px-6 py-12 lg:flex-row lg:items-start lg:py-16">
        <section class="flex-1 space-y-6">
            <div class="inline-flex items-center gap-2 rounded-full border border-neutral-800 bg-neutral-900/60 px-4 py-2 text-xs uppercase tracking-[0.3em] text-neutral-400">
                Crafted for speed
                <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
            </div>
            <h1 class="text-4xl font-bold leading-tight text-white sm:text-5xl lg:text-6xl">
                Bangun aplikasi modern <span class="text-neutral-400">dengan sentuhan elegan</span>
            </h1>
            <p class="max-w-2xl text-lg text-neutral-300">
                Start with a focused starter layout, premium typography, and a sleek black palette powered by Tailwind CSS. Ship faster with a foundation that already looks intentional.
            </p>
            <div class="flex flex-wrap gap-3 text-sm">
                <a href="https://laravel.com/docs" target="_blank" class="rounded-full bg-white px-5 py-3 font-semibold text-black shadow-lg shadow-white/5 transition hover:scale-[1.01]">Baca dokumentasi</a>
                <a href="https://laracasts.com" target="_blank" class="rounded-full border border-neutral-700 px-5 py-3 font-medium text-neutral-100 transition hover:border-white hover:bg-white/5">Tonton Laracasts</a>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-neutral-800 bg-neutral-900/60 p-6 shadow-xl shadow-black/30">
                    <div class="flex items-center gap-3">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-neutral-800 text-white">01</span>
                        <div>
                            <p class="text-sm uppercase tracking-[0.15em] text-neutral-400">Getting started</p>
                            <p class="text-lg font-semibold text-white">Scaffold cepat</p>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-neutral-300">Gunakan artisan dan starter kit untuk meluncurkan fitur auth, API, serta UI dalam hitungan menit.</p>
                </div>

                <div class="rounded-2xl border border-neutral-800 bg-neutral-900/60 p-6 shadow-xl shadow-black/30">
                    <div class="flex items-center gap-3">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-neutral-800 text-white">02</span>
                        <div>
                            <p class="text-sm uppercase tracking-[0.15em] text-neutral-400">Performance</p>
                            <p class="text-lg font-semibold text-white">Optimasi bawaan</p>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-neutral-300">Queue, cache, dan konfigurasi environment sudah siap dikustomisasi agar aplikasi tetap ringan.</p>
                </div>
            </div>
        </section>

        <aside class="w-full max-w-xl rounded-2xl border border-neutral-800 bg-neutral-900/80 p-6 shadow-2xl shadow-black/40 lg:w-[420px]">
            <div class="flex items-center justify-between">
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-400">Koneksi cepat</p>
                <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-300">Live</span>
            </div>
            <div class="mt-4 space-y-4">
                <div class="rounded-xl border border-neutral-800 bg-neutral-900/80 p-4">
                    <p class="text-sm text-neutral-400">Deployment</p>
                    <p class="text-lg font-semibold text-white">Laravel Forge &amp; Vapor</p>
                    <p class="mt-2 text-sm text-neutral-300">Deploy zero-downtime dengan integrasi resmi untuk server ataupun serverless.</p>
                </div>
                <div class="rounded-xl border border-neutral-800 bg-neutral-900/80 p-4">
                    <p class="text-sm text-neutral-400">Toolkit</p>
                    <p class="text-lg font-semibold text-white">Paket inti</p>
                    <ul class="mt-3 space-y-2 text-sm text-neutral-300">
                        <li class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-white"></span>Queue &amp; Broadcasting siap pakai</li>
                        <li class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-white"></span>Blade + Tailwind untuk UI gesit</li>
                        <li class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-white"></span>Testing dengan PHPUnit &amp; Pest kompatibel</li>
                    </ul>
                </div>
            </div>
            <div class="mt-6 flex flex-wrap gap-3 text-sm">
                <a href="https://github.com/laravel/laravel" target="_blank" class="rounded-full border border-neutral-700 px-4 py-2 text-neutral-100 transition hover:border-white hover:bg-white/5">Source</a>
                <a href="https://laravel-news.com" target="_blank" class="rounded-full border border-neutral-700 px-4 py-2 text-neutral-100 transition hover:border-white hover:bg-white/5">Laravel News</a>
                <a href="https://forge.laravel.com" target="_blank" class="rounded-full bg-white px-4 py-2 font-semibold text-black transition hover:scale-[1.01]">Deploy</a>
            </div>
        </aside>
    </main>
</body>
</html>
