<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root { color-scheme: dark; }
        body { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-black via-neutral-900 to-neutral-950 text-neutral-100">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,_rgba(255,255,255,0.08),_transparent_35%),radial-gradient(circle_at_80%_0%,_rgba(255,255,255,0.04),_transparent_30%)]"></div>

    <div class="relative z-10 mx-auto flex min-h-screen max-w-4xl flex-col items-center justify-center px-6 py-12">
        <div class="w-full max-w-2xl rounded-2xl border border-neutral-800 bg-neutral-900/80 p-8 shadow-2xl shadow-black/40">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-xs uppercase tracking-[0.25em] text-neutral-400">Profil</p>
                    <h1 class="mt-2 text-3xl font-bold text-white">Data Siswa</h1>
                    <p class="mt-2 text-sm text-neutral-300">Ringkasan identitas siswa dengan styling elegan berbasis Tailwind.</p>
                </div>
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-neutral-800 text-sm font-semibold">ID</div>
            </div>

            <div class="mt-8 grid gap-4 sm:grid-cols-3">
                <div class="rounded-xl border border-neutral-800 bg-neutral-900/60 p-4">
                    <p class="text-xs uppercase tracking-[0.2em] text-neutral-400">Nama</p>
                    <p class="mt-2 text-xl font-semibold text-white">{{ $nama }}</p>
                </div>
                <div class="rounded-xl border border-neutral-800 bg-neutral-900/60 p-4">
                    <p class="text-xs uppercase tracking-[0.2em] text-neutral-400">Kelas</p>
                    <p class="mt-2 text-xl font-semibold text-white">{{ $kelas }}</p>
                </div>
                <div class="rounded-xl border border-neutral-800 bg-neutral-900/60 p-4">
                    <p class="text-xs uppercase tracking-[0.2em] text-neutral-400">Jurusan</p>
                    <p class="mt-2 text-xl font-semibold text-white">{{ $jurusan }}</p>
                </div>
            </div>

            <div class="mt-8 rounded-xl border border-neutral-800 bg-neutral-900/60 p-6">
                <p class="text-sm text-neutral-300">Butuh pembaruan data? Pastikan informasi sudah valid sebelum dikirim ke sistem akademik.</p>
                <div class="mt-4 flex flex-wrap gap-3 text-sm">
                    <a href="/" class="rounded-full border border-neutral-700 px-4 py-2 text-neutral-100 transition hover:border-white hover:bg-white/5">Kembali ke beranda</a>
                    <a href="{{ url()->current() }}" class="rounded-full bg-white px-4 py-2 font-semibold text-black transition hover:scale-[1.01]">Segarkan</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>