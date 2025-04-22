<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-white">
    <!-- Header -->

    <header class="absolute inset-x-0 top-0 z-50">
        <nav
            class="fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-md border border-gray-100 bg-white/80 py-3 shadow backdrop-blur-lg md:top-6 md:rounded-3xl lg:max-w-screen-lg">
            <div class="px-4">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex shrink-0">
                        <a href="/" class="flex items-center">
                            <img class="h-7 w-auto"
                                src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
                                alt="">
                            <p class="sr-only">Website Title</p>
                        </a>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex md:items-center md:justify-center md:gap-5">
                        <a href="#"
                            class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100">
                            Home
                        </a>
                        <a href="#"
                            class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100">
                            About
                        </a>
                        <a href="#"
                            class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100">
                            Features
                        </a>
                        <a href="#"
                            class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-100">
                            Article
                        </a>
                    </div>

                    <!-- Action Buttons (Desktop) & Toggle (Mobile) -->
                    <div class="flex items-center justify-end gap-3">
                        <!-- Desktop only -->
                        <a href="{{ route('login') }}"
                            class="hidden sm:inline-flex items-center justify-center rounded-xl bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 transition-all duration-150 hover:bg-gray-50">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="hidden sm:inline-flex items-center justify-center rounded-xl bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm transition-all duration-150 hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                            Register
                        </a>

                        <!-- Toggle Button (Mobile Only) -->
                        <button @click="open = !open" type="button"
                            class="inline-flex items-center justify-center rounded-md p-2 text-gray-700 hover:bg-gray-100 focus:outline-none sm:hidden">
                            <svg class="h-6 w-6" x-show="!open" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg class="h-6 w-6" x-show="open" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div x-data="{ open: false }" class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Backdrop -->
            <div x-show="open" class="fixed inset-0 z-40 bg-gray-900/50"></div>

            <!-- Sidebar -->
            <div x-show="open" x-transition
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                    <button @click="open = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                        </div>
                        <div class="py-6">
                            <a href="{{ route('login') }}"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <main class="isolate">
        <!-- Hero section -->
        <div class="relative pt-14">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                            Kelola Keuanganmu dengan Lebih Cerdas
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            MyMonevate membantumu merencanakan anggaran, memantau pemasukan dan pengeluaran, serta
                            mencapai tujuan keuangan dengan mudah dan terarah.
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="{{ route('register') }}"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Mulai Sekarang
                            </a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
                                Pelajari Lebih Lanjut <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                    <div class="mt-16 flow-root sm:mt-24">
                        <!-- Gradient Background -->
                        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                            aria-hidden="true">
                            <div
                                class="relative mx-auto w-[36rem] sm:w-[72rem] h-[20rem] bg-gradient-to-br from-indigo-400/30 via-indigo-300/20 to-white opacity-40 rounded-full blur-3xl">
                            </div>
                        </div>

                        <!-- Beta Badge -->
                        <div class="mt-8 flex justify-center">
                            <span
                                class="inline-block rounded-full bg-yellow-100 px-4 py-1 text-sm font-medium text-yellow-800 shadow-sm animate-pulse">
                                🚧 MyMonevate masih dalam tahap pengembangan (Beta)
                            </span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Kenapa Memilih Kami?</h2>
                <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    Fitur Cerdas untuk Keuangan yang Lebih Baik
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    MyMonevate hadir untuk membantu generasi muda dalam mengelola keuangan dengan cara yang mudah,
                    cepat, dan menyenangkan.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-y-12 gap-x-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="text-center">
                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-indigo-100">
                        💡
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-gray-900">Perencanaan Cerdas</h3>
                    <p class="mt-2 text-sm text-gray-600">Atur anggaran dan tujuan keuanganmu dengan fitur smart budget
                        & goal tracker.
                    </p>
                </div>
                <div class="text-center">
                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-indigo-100">
                        📊
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-gray-900">Pantauan Real-time</h3>
                    <p class="mt-2 text-sm text-gray-600">Lacak pengeluaran, pemasukan, dan asetmu secara langsung dan
                        terstruktur.</p>
                </div>
                <div class="text-center">
                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-indigo-100">
                        🎓
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-gray-900">Edukasi Finansial</h3>
                    <p class="mt-2 text-sm text-gray-600">Akses artikel dan konten edukatif agar kamu makin cerdas
                        secara finansial.</p>
                </div>
            </div>
        </div>


        <!-- Feature section -->
        <div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-56 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Fitur Unggulan</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kelola Keuanganmu dengan
                    Cerdas</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">MyMonevate hadir sebagai sahabat finansialmu, dengan
                    berbagai fitur yang dirancang untuk membantu perencanaan dan pencapaian tujuan keuanganmu.</p>
            </div>

            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

                    <!-- Budgeting -->
                    <div class="relative pl-16 transform transition duration-500 hover:scale-105">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 10h11M9 21V3m12 6h-6m6 4h-6" />
                                </svg>
                            </div>
                            Budgeting Bulanan
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Rencanakan dan lacak pengeluaran bulananmu
                            agar tetap sesuai anggaran dan tujuan finansial.</dd>
                    </div>

                    <!-- Artikel Edukasi -->
                    <div class="relative pl-16 transform transition duration-500 hover:scale-105">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 20.25v-15m-6 12h12M6 8.25h12" />
                                </svg>
                            </div>
                            Artikel Edukasi
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Pelajari strategi keuangan, investasi, dan
                            tips mengelola uang melalui artikel yang informatif dan mudah dipahami.</dd>
                    </div>

                    <!-- Goals Tracker -->
                    <div class="relative pl-16 transform transition duration-500 hover:scale-105">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m-9 2a9 9 0 1118 0 9 9 0 01-18 0z" />
                                </svg>
                            </div>
                            Goals Tracker
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Tetapkan target keuangan, pantau progres,
                            dan raih impianmu satu langkah demi satu.</dd>
                    </div>

                    <!-- Pencatatan Aset -->
                    <div class="relative pl-16 transform transition duration-500 hover:scale-105">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                                </svg>
                            </div>
                            Pencatatan Aset
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Catat dan pantau nilai asetmu seperti saham
                            dan crypto secara real-time dan transparan.</dd>
                    </div>

                </dl>
            </div>
        </div>


        <!-- User Success Stories Section -->
        <div class="mx-auto mt-32 max-w-7xl sm:mt-56 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Cerita Sukses Pengguna MyMonevate
                </h2>
                <p class="mt-4 text-lg leading-8 text-gray-600">
                    Lihat bagaimana MyMonevate telah membantu banyak pengguna untuk mencapai tujuan keuangan mereka.
                </p>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-16 lg:grid-cols-3 lg:gap-12">
                <!-- User Story 1 -->
                <div class="flex flex-col items-center bg-white p-8 rounded-lg shadow-lg">
                    <img class="h-24 w-24 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"
                        alt="User 1">
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">John Doe</h3>
                    <p class="mt-2 text-base text-gray-600">“Dengan MyMonevate, saya berhasil merencanakan anggaran
                        bulanan dan menabung lebih dari 20% pendapatan saya untuk investasi jangka panjang!”</p>
                    <p class="mt-4 font-medium text-indigo-600">Pencapaian: Tabungan Investasi 20%</p>
                </div>

                <!-- User Story 2 -->
                <div class="flex flex-col items-center bg-white p-8 rounded-lg shadow-lg">
                    <img class="h-24 w-24 rounded-full" src="https://randomuser.me/api/portraits/women/2.jpg"
                        alt="User 2">
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Jane Smith</h3>
                    <p class="mt-2 text-base text-gray-600">“MyMonevate membantu saya menetapkan tujuan keuangan yang
                        jelas dan mengelola pengeluaran, sehingga saya bisa mengurangi utang saya dalam 6 bulan!”</p>
                    <p class="mt-4 font-medium text-indigo-600">Pencapaian: Mengurangi Utang 15%</p>
                </div>

                <!-- User Story 3 -->
                <div class="flex flex-col items-center bg-white p-8 rounded-lg shadow-lg">
                    <img class="h-24 w-24 rounded-full" src="https://randomuser.me/api/portraits/men/3.jpg"
                        alt="User 3">
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Michael Lee</h3>
                    <p class="mt-2 text-base text-gray-600">“Saya berhasil mencapai tujuan keuangan untuk membeli rumah
                        dengan rencana tabungan yang dibantu oleh MyMonevate.”</p>
                    <p class="mt-4 font-medium text-indigo-600">Pencapaian: Membeli Rumah</p>
                </div>
            </div>
        </div>


        <!-- Artikel section -->
        <div class="py-24 sm:pt-48">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-4xl text-center">
                    <h2 class="text-base font-semibold leading-7 text-indigo-600">Artikel</h2>
                    <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Artikel terbaru untuk
                        membantu Anda merencanakan keuangan dengan lebih baik</p>
                </div>
                <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">Dapatkan wawasan dari
                    berbagai artikel yang memberikan panduan praktis dan strategi untuk mencapai tujuan keuangan Anda.
                </p>
                <div
                    class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <div
                        class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 lg:mt-8 lg:rounded-r-none xl:p-10">
                        <div>
                            <div class="flex items-center justify-between gap-x-4">
                                <h3 id="artikel-keuangan" class="text-lg font-semibold leading-8 text-gray-900">
                                    Keuangan Pribadi</h3>
                            </div>
                            <p class="mt-4 text-sm leading-6 text-gray-600">Panduan tentang bagaimana mengatur keuangan
                                pribadi dengan bijak, mulai dari menyusun anggaran hingga meminimalkan pengeluaran.</p>
                            <p class="mt-6 flex items-baseline gap-x-1">
                                <span class="text-4xl font-bold tracking-tight text-gray-900">Gratis</span>
                            </p>
                            <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Mengelola anggaran bulanan
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Menabung untuk tujuan jangka panjang
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Rencana pensiun yang cerdas
                                </li>
                            </ul>
                        </div>
                        <a href="#" aria-describedby="artikel-keuangan"
                            class="mt-8 block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Baca
                            artikel</a>
                    </div>
                    <div
                        class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 lg:z-10 lg:rounded-b-none xl:p-10">
                        <div>
                            <div class="flex items-center justify-between gap-x-4">
                                <h3 id="artikel-investasi" class="text-lg font-semibold leading-8 text-indigo-600">
                                    Investasi</h3>
                                <p
                                    class="rounded-full bg-indigo-600/10 px-2.5 py-1 text-xs font-semibold leading-5 text-indigo-600">
                                    Paling populer
                                </p>
                            </div>
                            <p class="mt-4 text-sm leading-6 text-gray-600">Temukan berbagai tips dan strategi
                                investasi yang dapat membantu Anda mengoptimalkan aset Anda untuk masa depan.</p>
                            <p class="mt-6 flex items-baseline gap-x-1">
                                <span class="text-4xl font-bold tracking-tight text-gray-900">Gratis</span>
                            </p>
                            <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Investasi saham dan crypto
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Diversifikasi portofolio yang efektif
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Investasi untuk masa depan yang lebih cerah
                                </li>
                            </ul>
                        </div>
                        <a href="#" aria-describedby="artikel-investasi"
                            class="mt-8 block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Baca
                            artikel</a>
                    </div>
                    <div
                        class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 lg:mt-8 lg:rounded-l-none xl:p-10">
                        <div>
                            <div class="flex items-center justify-between gap-x-4">
                                <h3 id="artikel-pensiu" class="text-lg font-semibold leading-8 text-gray-900">
                                    Perencanaan Pensiun</h3>
                            </div>
                            <p class="mt-4 text-sm leading-6 text-gray-600">Pelajari cara mempersiapkan keuangan untuk
                                pensiun yang nyaman dan tentukan langkah-langkah yang perlu diambil sejak dini.</p>
                            <p class="mt-6 flex items-baseline gap-x-1">
                                <span class="text-4xl font-bold tracking-tight text-gray-900">Gratis</span>
                            </p>
                            <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Rencana pensiun yang realistis
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Menyiapkan dana pensiun sejak dini
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Perencanaan keuangan untuk pensiun bahagia
                                </li>
                            </ul>
                        </div>
                        <a href="#" aria-describedby="artikel-pensiu"
                            class="mt-8 block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Baca
                            artikel</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- FAQs -->
        <div
            class="mx-auto max-w-2xl divide-y divide-gray-900/10 px-6 pb-8 sm:pb-24 sm:pt-12 lg:max-w-7xl lg:px-8 lg:pb-32">
            <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Frequently asked questions</h2>
            <dl class="mt-10 space-y-8 divide-y divide-gray-900/10">
                <div x-data="{ open: false }" class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt @click="open = !open"
                        class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5 cursor-pointer">
                        What's the best thing about Switzerland?
                    </dt>
                    <dd x-show="open" x-transition class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-gray-600">I don't know, but the flag is a big plus. Lorem
                            ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
                    </dd>
                </div>

                <div x-data="{ open: false }" class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt @click="open = !open"
                        class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5 cursor-pointer">
                        How do I make the most of my financial plan?
                    </dt>
                    <dd x-show="open" x-transition class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-gray-600">To make the most of your financial plan, it's
                            important to stick to your budget, track your expenses, and adjust your savings goals
                            regularly. Keeping an eye on your financial health will ensure you stay on track.</p>
                    </dd>
                </div>

                <div x-data="{ open: false }" class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt @click="open = !open"
                        class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5 cursor-pointer">
                        What should I do if I go over my budget?
                    </dt>
                    <dd x-show="open" x-transition class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-gray-600">If you go over your budget, review your spending
                            and try to identify areas where you can cut back. You may also need to adjust your budget
                            for the next month to accommodate for unexpected expenses.</p>
                    </dd>
                </div>

                <div x-data="{ open: false }" class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt @click="open = !open"
                        class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5 cursor-pointer">
                        How can I track my assets effectively?
                    </dt>
                    <dd x-show="open" x-transition class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-gray-600">Tracking your assets involves monitoring their
                            current value and any changes over time. Regularly review your investment portfolio and
                            update it as needed. MyMonevate allows you to track assets like stocks, crypto, and more to
                            keep you informed.</p>
                    </dd>
                </div>

                <!-- More questions can be added in a similar manner... -->

            </dl>
        </div>


        <!-- CTA section -->
        <div class="relative -z-10 mt-32 px-6 lg:px-8">
            <div class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 transform-gpu justify-center overflow-hidden blur-3xl sm:bottom-0 sm:right-[calc(50%-6rem)] sm:top-auto sm:translate-y-0 sm:transform-gpu sm:justify-end"
                aria-hidden="true">
                <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-25"
                    style="clip-path: polygon(73.6% 48.6%, 91.7% 88.5%, 100% 53.9%, 97.4% 18.1%, 92.5% 15.4%, 75.7% 36.3%, 55.3% 52.8%, 46.5% 50.9%, 45% 37.4%, 50.3% 13.1%, 21.3% 36.2%, 0.1% 0.1%, 5.4% 49.1%, 21.4% 36.4%, 58.9% 100%, 73.6% 48.6%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Tingkatkan produktivitas
                    Anda.<br>Mulai gunakan aplikasi kami hari ini.</h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600">Meningkatkan efisiensi keuangan Anda
                    dengan perencanaan yang lebih baik dan pantauan yang lebih mudah. Ayo, manfaatkan teknologi untuk
                    mencapai tujuan finansial Anda.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Mulai
                        sekarang</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Pelajari lebih lanjut
                        <span aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="absolute left-1/2 right-0 top-full -z-10 hidden -translate-y-1/2 transform-gpu overflow-hidden blur-3xl sm:block"
                aria-hidden="true">
                <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <div class="mx-auto mt-32 max-w-7xl px-6 lg:px-8">
        <footer aria-labelledby="footer-heading" class="relative border-t border-gray-900/10 py-24 sm:mt-56 sm:py-32">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <img class="h-7" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="Nama Perusahaan">
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Solusi</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Perencanaan
                                        Keuangan</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Manajemen Aset</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Laporan
                                        Keuangan</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Pencapaian Tujuan
                                        Finansial</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Bantuan</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Harga</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Dokumentasi</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Panduan</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Referensi API</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Perusahaan</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Blog</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Karir</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Berita</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Mitra</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Klaim</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Kebijakan
                                        Privasi</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Ketentuan
                                        Layanan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


</body>

</html>
