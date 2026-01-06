<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru & Mata Pelajaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root { color-scheme: dark; }
        body { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-black via-neutral-900 to-neutral-950 text-neutral-100">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_15%_20%,_rgba(255,255,255,0.08),_transparent_35%),radial-gradient(circle_at_85%_10%,_rgba(255,255,255,0.05),_transparent_30%)]"></div>

    <div class="relative z-10 mx-auto flex min-h-screen max-w-6xl flex-col px-6 py-12">
        <header class="flex flex-wrap items-center justify-between gap-4 border-b border-neutral-800/70 pb-6">
            <div>
                <p class="text-xs uppercase tracking-[0.25em] text-neutral-400">Kurikulum</p>
                <h1 class="mt-2 text-4xl font-bold text-white">Guru & Mata Pelajaran</h1>
                <p class="mt-2 max-w-2xl text-sm text-neutral-300">Daftar pengampu beserta mata pelajaran yang mereka ajarkan, disajikan dengan tampilan elegan berbasis Tailwind.</p>
            </div>
            <div class="flex flex-wrap items-center gap-3 text-sm">
                <a href="/" class="rounded-full border border-neutral-700 px-4 py-2 text-neutral-100 transition hover:border-white hover:bg-white/5">Beranda</a>
                <span class="rounded-full bg-emerald-500/15 px-4 py-2 text-xs font-semibold text-emerald-300">Live Data</span>
            </div>
        </header>

        <main class="mt-8 grid gap-6 sm:grid-cols-2">
            @forelse ($guruList as $guru)
                <article class="group rounded-2xl border border-neutral-800 bg-neutral-900/70 p-6 shadow-xl shadow-black/30 transition hover:-translate-y-1 hover:border-neutral-700 hover:shadow-black/40">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-xs uppercase tracking-[0.2em] text-neutral-400">Guru</p>
                            <h2 class="mt-2 text-2xl font-semibold text-white">{{ $guru->nama_guru }}</h2>
                        </div>
                        <div class="rounded-full bg-neutral-800 px-3 py-1 text-xs font-semibold text-neutral-200">{{ $guru->mataPelajaran->count() }} Mapel</div>
                    </div>

                    <div class="mt-5 space-y-3">
                        <p class="text-sm text-neutral-400">Mata Pelajaran</p>
                        <div class="flex flex-wrap gap-2">
                            @forelse ($guru->mataPelajaran as $mapel)
                                <span class="rounded-full border border-neutral-700 bg-neutral-800/80 px-3 py-1 text-sm text-neutral-100 transition group-hover:border-white/60 group-hover:bg-white/5">{{ $mapel->nama_mapel }}</span>
                            @empty
                                <span class="text-sm text-neutral-500">Belum ada mata pelajaran terdaftar.</span>
                            @endforelse
                        </div>
                    </div>
                </article>
            @empty
                <div class="sm:col-span-2">
                    <div class="rounded-2xl border border-neutral-800 bg-neutral-900/70 p-10 text-center shadow-xl shadow-black/30">
                        <p class="text-sm text-neutral-300">Belum ada data guru atau mata pelajaran yang tersedia.</p>
                        <div class="mt-4 inline-flex items-center gap-2 rounded-full border border-neutral-700 px-4 py-2 text-xs uppercase tracking-[0.2em] text-neutral-400">
                            <span class="h-2 w-2 rounded-full bg-amber-400"></span>
                            Periksa seeder atau input data
                        </div>
                    </div>
                </div>
            @endforelse
        </main>
    </div>
</body>
</html>
