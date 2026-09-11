@php
    $categories = [
        ['name' => 'Одежда', 'count' => '248 товаров', 'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=900&q=85'],
        ['name' => 'Обувь', 'count' => '156 товаров', 'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=900&q=85'],
        ['name' => 'Аксессуары', 'count' => '94 товара', 'image' => 'https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?auto=format&fit=crop&w=900&q=85'],
        ['name' => 'Техника', 'count' => '121 товар', 'image' => 'https://images.unsplash.com/photo-1498049794561-7780e7231661?auto=format&fit=crop&w=900&q=85'],
        ['name' => 'Для дома', 'count' => '183 товара', 'image' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=900&q=85'],
        ['name' => 'Спорт', 'count' => '87 товаров', 'image' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=900&q=85'],
    ];

    $products = [
        [
            'name' => 'Кроссовки Motion 01',
            'category' => 'Обувь',
            'price' => '12 990 ₽',
            'oldPrice' => '15 490 ₽',
            'badge' => '−16%',
            'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=1000&q=90',
        ],
        [
            'name' => 'Наушники Form',
            'category' => 'Техника',
            'price' => '18 490 ₽',
            'oldPrice' => null,
            'badge' => 'Новинка',
            'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=1000&q=90',
        ],
        [
            'name' => 'Сумка Weekend',
            'category' => 'Аксессуары',
            'price' => '8 990 ₽',
            'oldPrice' => null,
            'badge' => null,
            'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=1000&q=90',
        ],
        [
            'name' => 'Часы Mono Steel',
            'category' => 'Аксессуары',
            'price' => '21 990 ₽',
            'oldPrice' => '24 990 ₽',
            'badge' => '−12%',
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=1000&q=90',
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @include('partials.head', ['title' => 'Главная'])
        <meta name="description" content="SFERA — современный магазин вещей для города, дома и движения.">
    </head>
    <body class="min-w-80 bg-[#f5f5ef] font-sans text-[#17211c] antialiased selection:bg-lime-300 selection:text-[#17211c] dark:bg-zinc-950 dark:text-zinc-50">
        <div class="bg-[#17211c] px-4 py-2.5 text-center text-xs font-medium tracking-wide text-white sm:text-sm">
            Бесплатная доставка от 7 000 ₽
            <span class="mx-2 text-white/35">•</span>
            <a href="#popular" class="underline decoration-white/40 underline-offset-4 transition hover:decoration-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Смотреть новинки</a>
        </div>

        <header class="relative z-40 border-b border-black/8 bg-[#f5f5ef]/95 backdrop-blur-xl dark:border-white/10 dark:bg-zinc-950/95">
            <div class="mx-auto flex max-w-[1440px] items-center gap-3 px-4 py-4 sm:px-6 lg:px-10">
                <details class="group relative lg:hidden">
                    <summary class="flex size-11 cursor-pointer list-none items-center justify-center rounded-full border border-black/10 bg-white transition hover:bg-black hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] dark:border-white/15 dark:bg-zinc-900 [&::-webkit-details-marker]:hidden">
                        <span class="sr-only">Открыть меню</span>
                        <svg class="size-5 group-open:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" /></svg>
                        <svg class="hidden size-5 group-open:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" /></svg>
                    </summary>
                    <div class="absolute left-0 top-14 w-[min(21rem,calc(100vw-2rem))] rounded-3xl border border-black/8 bg-white p-3 shadow-2xl shadow-black/15 dark:border-white/10 dark:bg-zinc-900">
                        <nav aria-label="Мобильная навигация" class="grid gap-1 text-base font-medium">
                            <a href="#catalog" class="rounded-2xl px-4 py-3 transition hover:bg-[#edf6ca] hover:text-[#17211c]">Каталог</a>
                            <a href="#popular" class="rounded-2xl px-4 py-3 transition hover:bg-[#edf6ca] hover:text-[#17211c]">Новинки</a>
                            <a href="#sale" class="rounded-2xl px-4 py-3 transition hover:bg-[#edf6ca] hover:text-[#17211c]">Скидки</a>
                            <a href="#about" class="rounded-2xl px-4 py-3 transition hover:bg-[#edf6ca] hover:text-[#17211c]">О магазине</a>
                        </nav>
                    </div>
                </details>

                <a href="{{ route('home') }}" class="group flex shrink-0 items-center gap-2 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#17211c] dark:focus-visible:outline-white" aria-label="SFERA — на главную">
                    <span class="grid size-10 place-items-center rounded-full bg-[#17211c] text-lime-300 transition-transform group-hover:rotate-12 dark:bg-lime-300 dark:text-[#17211c]">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 17.5 12 4l7 13.5-7-3-7 3Z" fill="currentColor" /></svg>
                    </span>
                    <span class="text-xl font-black tracking-[-0.06em] sm:text-2xl">SFERA</span>
                </a>

                <nav aria-label="Основная навигация" class="ml-7 hidden items-center gap-7 text-sm font-semibold lg:flex">
                    <a href="#catalog" class="transition hover:text-emerald-700 dark:hover:text-lime-300">Каталог</a>
                    <a href="#popular" class="transition hover:text-emerald-700 dark:hover:text-lime-300">Новинки</a>
                    <a href="#sale" class="transition hover:text-emerald-700 dark:hover:text-lime-300">Скидки</a>
                    <a href="#about" class="transition hover:text-emerald-700 dark:hover:text-lime-300">О магазине</a>
                </nav>

                <form role="search" class="ml-auto hidden min-w-0 max-w-md flex-1 sm:block lg:ml-10">
                    <label for="site-search" class="sr-only">Поиск по каталогу</label>
                    <div class="relative">
                        <svg class="pointer-events-none absolute left-4 top-1/2 size-4 -translate-y-1/2 text-black/45 dark:text-white/45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="11" cy="11" r="6.5" /><path stroke-linecap="round" d="m16 16 4 4" /></svg>
                        <input id="site-search" type="search" placeholder="Найти товар" class="h-11 w-full rounded-full border-0 bg-white pl-11 pr-4 text-sm outline-none ring-1 ring-black/8 transition placeholder:text-black/40 focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-900 dark:ring-white/10 dark:placeholder:text-white/40 dark:focus:ring-lime-300">
                    </div>
                </form>

                <div class="ml-auto flex items-center gap-1 sm:ml-0 sm:gap-2">
                    <button type="button" class="grid size-11 place-items-center rounded-full transition hover:bg-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] dark:hover:bg-zinc-900 dark:focus-visible:outline-white" aria-label="Избранное">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M20.8 5.7a5.3 5.3 0 0 0-7.5 0L12 7l-1.3-1.3a5.3 5.3 0 1 0-7.5 7.5L12 22l8.8-8.8a5.3 5.3 0 0 0 0-7.5Z" /></svg>
                    </button>
                    <button type="button" class="relative grid size-11 place-items-center rounded-full transition hover:bg-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] dark:hover:bg-zinc-900 dark:focus-visible:outline-white" aria-label="Корзина, 2 товара">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14l-1 12H6L5 8Zm4 0V6a3 3 0 0 1 6 0v2" /></svg>
                        <span class="absolute right-0.5 top-0.5 grid size-4 place-items-center rounded-full bg-[#ff6b4a] text-[9px] font-bold text-white">2</span>
                    </button>
                </div>
            </div>

            <form role="search" class="px-4 pb-4 sm:hidden">
                <label for="mobile-search" class="sr-only">Поиск по каталогу</label>
                <div class="relative">
                    <svg class="pointer-events-none absolute left-4 top-1/2 size-4 -translate-y-1/2 text-black/45 dark:text-white/45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="11" cy="11" r="6.5" /><path stroke-linecap="round" d="m16 16 4 4" /></svg>
                    <input id="mobile-search" type="search" placeholder="Найти товар" class="h-11 w-full rounded-full border-0 bg-white pl-11 pr-4 text-sm outline-none ring-1 ring-black/8 transition placeholder:text-black/40 focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-900 dark:ring-white/10 dark:placeholder:text-white/40 dark:focus:ring-lime-300">
                </div>
            </form>
        </header>

        <main>
            <section class="mx-auto grid max-w-[1440px] gap-4 px-4 py-4 sm:px-6 sm:py-6 lg:grid-cols-12 lg:px-10 lg:py-8">
                <div class="relative isolate min-h-[34rem] overflow-hidden rounded-[2rem] bg-[#183a2f] px-6 py-8 text-white sm:px-10 sm:py-10 md:min-h-[36rem] lg:col-span-8 lg:px-12 lg:py-12">
                    <div class="absolute -right-24 -top-28 -z-10 size-80 rounded-full bg-lime-300/20 blur-3xl"></div>
                    <div class="absolute -bottom-40 left-1/3 -z-10 size-96 rounded-full bg-emerald-400/20 blur-3xl"></div>
                    <div class="relative z-10 max-w-xl">
                        <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.18em] ring-1 ring-white/20 backdrop-blur"><span class="size-1.5 rounded-full bg-lime-300"></span>Новая коллекция</span>
                        <h1 class="mt-6 text-[clamp(2.8rem,7vw,6.7rem)] font-black leading-[0.86] tracking-[-0.075em]">Вещи<br>в твоём<br><span class="text-lime-300">ритме.</span></h1>
                        <p class="mt-6 max-w-md text-base leading-7 text-white/70 sm:text-lg">Собрали новое для города, путешествий и дома. Честный дизайн, понятный выбор и быстрая доставка.</p>
                        <div class="mt-8 flex flex-wrap gap-3">
                            <a href="#popular" class="inline-flex h-12 items-center justify-center gap-2 rounded-full bg-lime-300 px-6 text-sm font-bold text-[#17211c] transition hover:bg-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Смотреть коллекцию <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></a>
                            <a href="#catalog" class="inline-flex h-12 items-center justify-center rounded-full px-6 text-sm font-bold ring-1 ring-white/30 transition hover:bg-white/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">В каталог</a>
                        </div>
                    </div>

                    <div class="absolute -bottom-10 -right-16 h-[24rem] w-[25rem] rotate-[-8deg] sm:-right-8 sm:h-[29rem] sm:w-[31rem] md:bottom-0 md:right-0 md:h-[34rem] md:w-[47%] md:rotate-0">
                        <div class="absolute inset-6 rotate-6 rounded-[3rem] bg-[#f1eee4] shadow-2xl shadow-black/30 md:inset-10 md:rotate-3"></div>
                        <img src="https://images.unsplash.com/photo-1608231387042-66d1773070a5?auto=format&fit=crop&w=1200&q=90" alt="Белые кроссовки из новой коллекции" class="relative h-full w-full rotate-[-7deg] object-contain drop-shadow-2xl md:rotate-[-10deg]" fetchpriority="high">
                        <div class="absolute bottom-20 left-2 rounded-2xl bg-white/95 px-4 py-3 text-[#17211c] shadow-xl backdrop-blur sm:left-5 md:bottom-16 md:left-0">
                            <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-black/45">Urban 03</p>
                            <p class="mt-0.5 text-sm font-extrabold">от 9 990 ₽</p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 lg:col-span-4 lg:grid-cols-1">
                    <a id="sale" href="#popular" class="group relative min-h-64 overflow-hidden rounded-[2rem] bg-[#ff6b4a] p-7 text-[#17211c] sm:p-8 lg:min-h-0">
                        <div class="absolute -bottom-20 -right-10 size-64 rounded-full border-[36px] border-[#17211c]/10 transition-transform duration-500 group-hover:scale-110"></div>
                        <div class="relative flex h-full flex-col justify-between gap-12">
                            <div class="flex items-start justify-between gap-4">
                                <span class="rounded-full bg-white/85 px-3 py-1.5 text-xs font-bold">Только 3 дня</span>
                                <span class="grid size-10 place-items-center rounded-full bg-[#17211c] text-white transition-transform group-hover:translate-x-1" aria-hidden="true"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></span>
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Большая распродажа</p>
                                <p class="mt-1 text-6xl font-black tracking-[-0.08em] sm:text-7xl">−40%</p>
                                <p class="mt-3 max-w-xs text-sm leading-6 text-[#17211c]/70">На одежду и аксессуары прошлых коллекций.</p>
                            </div>
                        </div>
                    </a>

                    <div class="relative min-h-64 overflow-hidden rounded-[2rem] bg-[#dff59a] p-7 text-[#17211c] sm:p-8 lg:min-h-0">
                        <svg class="absolute -right-8 -top-8 size-48 text-[#17211c]/8" viewBox="0 0 100 100" fill="currentColor" aria-hidden="true"><path d="M50 0c0 27.6 22.4 50 50 50-27.6 0-50 22.4-50 50 0-27.6-22.4-50-50-50 27.6 0 50-22.4 50-50Z" /></svg>
                        <div class="relative flex h-full flex-col justify-between gap-10">
                            <span class="grid size-11 place-items-center rounded-full bg-[#17211c] text-lime-300"><svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M20 11c0 5-3.5 8-8 10-4.5-2-8-5-8-10V5l8-3 8 3v6Z" /><path stroke-linecap="round" stroke-linejoin="round" d="m9 11 2 2 4-4" /></svg></span>
                            <div>
                                <p class="text-2xl font-black tracking-[-0.04em]">30 дней на возврат</p>
                                <p class="mt-3 max-w-xs text-sm leading-6 text-[#17211c]/65">Примерьте дома. Не подойдёт — заберём бесплатно.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="catalog" class="mx-auto max-w-[1440px] scroll-mt-28 px-4 py-12 sm:px-6 sm:py-16 lg:px-10 lg:py-20">
                <div class="flex items-end justify-between gap-6">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-emerald-700 dark:text-lime-300">Выбирайте своё</p>
                        <h2 class="mt-3 text-3xl font-black tracking-[-0.055em] sm:text-5xl">Популярные категории</h2>
                    </div>
                    <a href="#" class="hidden items-center gap-2 text-sm font-bold transition hover:text-emerald-700 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#17211c] sm:flex dark:hover:text-lime-300 dark:focus-visible:outline-white">Весь каталог <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></a>
                </div>

                <div class="mt-8 grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4 xl:grid-cols-6">
                    @foreach ($categories as $category)
                        <a href="#" class="group overflow-hidden rounded-[1.5rem] bg-white p-2 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-black/8 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-emerald-700 dark:bg-zinc-900 dark:focus-visible:outline-lime-300">
                            <div class="aspect-[4/4.5] overflow-hidden rounded-[1.1rem] bg-zinc-100 dark:bg-zinc-800"><img src="{{ $category['image'] }}" alt="{{ $category['name'] }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy"></div>
                            <div class="flex items-end justify-between gap-2 px-2 pb-2 pt-4">
                                <div class="min-w-0">
                                    <h3 class="truncate text-sm font-extrabold sm:text-base">{{ $category['name'] }}</h3>
                                    <p class="mt-1 text-[11px] text-black/45 sm:text-xs dark:text-white/45">{{ $category['count'] }}</p>
                                </div>
                                <span class="grid size-8 shrink-0 place-items-center rounded-full border border-black/10 transition group-hover:border-[#17211c] group-hover:bg-[#17211c] group-hover:text-white dark:border-white/15 dark:group-hover:border-lime-300 dark:group-hover:bg-lime-300 dark:group-hover:text-[#17211c]" aria-hidden="true"><svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></span>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a href="#" class="mt-5 flex h-12 items-center justify-center rounded-full border border-black/10 text-sm font-bold transition hover:bg-[#17211c] hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] sm:hidden dark:border-white/15 dark:hover:bg-white dark:hover:text-[#17211c] dark:focus-visible:outline-white">Весь каталог</a>
            </section>

            <section id="popular" class="scroll-mt-28 bg-white py-12 dark:bg-zinc-900 sm:py-16 lg:py-20">
                <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-10">
                    <div class="flex items-end justify-between gap-6">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-emerald-700 dark:text-lime-300">Выбор покупателей</p>
                            <h2 class="mt-3 text-3xl font-black tracking-[-0.055em] sm:text-5xl">Сейчас в центре внимания</h2>
                        </div>
                        <div class="hidden gap-2 sm:flex" aria-label="Навигация по товарам">
                            <button type="button" class="grid size-11 place-items-center rounded-full border border-black/10 transition hover:bg-[#17211c] hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] dark:border-white/15 dark:hover:bg-lime-300 dark:hover:text-[#17211c] dark:focus-visible:outline-white" aria-label="Предыдущие товары"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6" /></svg></button>
                            <button type="button" class="grid size-11 place-items-center rounded-full border border-black/10 transition hover:bg-[#17211c] hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] dark:border-white/15 dark:hover:bg-lime-300 dark:hover:text-[#17211c] dark:focus-visible:outline-white" aria-label="Следующие товары"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></button>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-x-3 gap-y-8 sm:gap-x-5 lg:grid-cols-4">
                        @foreach ($products as $product)
                            <article class="group min-w-0">
                                <div class="relative overflow-hidden rounded-[1.5rem] bg-[#f2f2ed] dark:bg-zinc-800">
                                    <a href="#" class="block aspect-[4/5] focus-visible:outline-2 focus-visible:-outline-offset-4 focus-visible:outline-emerald-700 dark:focus-visible:outline-lime-300"><img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy"></a>
                                    @if ($product['badge'])
                                        <span class="absolute left-3 top-3 rounded-full bg-white px-2.5 py-1 text-[10px] font-extrabold text-[#17211c] shadow-sm sm:left-4 sm:top-4 sm:text-xs">{{ $product['badge'] }}</span>
                                    @endif
                                    <button type="button" class="absolute right-3 top-3 grid size-9 place-items-center rounded-full bg-white/90 text-[#17211c] shadow-sm backdrop-blur transition hover:scale-105 hover:bg-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] sm:right-4 sm:top-4 sm:size-10" aria-label="Добавить {{ $product['name'] }} в избранное"><svg class="size-4 sm:size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M20.8 5.7a5.3 5.3 0 0 0-7.5 0L12 7l-1.3-1.3a5.3 5.3 0 1 0-7.5 7.5L12 22l8.8-8.8a5.3 5.3 0 0 0 0-7.5Z" /></svg></button>
                                    <button type="button" class="absolute inset-x-3 bottom-3 hidden h-11 translate-y-2 items-center justify-center rounded-full bg-[#17211c] text-sm font-bold text-white opacity-0 shadow-lg transition duration-300 group-hover:translate-y-0 group-hover:opacity-100 focus:translate-y-0 focus:opacity-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:flex dark:bg-lime-300 dark:text-[#17211c]" aria-label="Добавить {{ $product['name'] }} в корзину">Добавить в корзину</button>
                                </div>
                                <div class="pt-4">
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-black/40 sm:text-xs dark:text-white/40">{{ $product['category'] }}</p>
                                    <a href="#" class="mt-1 block truncate text-sm font-extrabold transition hover:text-emerald-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] sm:text-base dark:hover:text-lime-300 dark:focus-visible:outline-white">{{ $product['name'] }}</a>
                                    <div class="mt-2 flex flex-wrap items-baseline gap-x-2 gap-y-1">
                                        <span class="text-sm font-black sm:text-base">{{ $product['price'] }}</span>
                                        @if ($product['oldPrice'])
                                            <span class="text-xs text-black/35 line-through sm:text-sm dark:text-white/35">{{ $product['oldPrice'] }}</span>
                                        @endif
                                    </div>
                                    <button type="button" class="mt-3 flex h-10 w-full items-center justify-center rounded-full border border-black/10 text-xs font-bold transition hover:bg-[#17211c] hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] sm:hidden dark:border-white/15 dark:hover:bg-lime-300 dark:hover:text-[#17211c] dark:focus-visible:outline-white">В корзину</button>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="mx-auto max-w-[1440px] px-4 py-12 sm:px-6 sm:py-16 lg:px-10 lg:py-20">
                <div class="relative isolate overflow-hidden rounded-[2rem] bg-[#e4efb4] px-6 py-10 text-[#17211c] sm:px-10 sm:py-14 lg:px-16 lg:py-20">
                    <div class="absolute inset-y-0 right-0 -z-10 w-full lg:w-[58%]"><img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=1600&q=90" alt="Городская коллекция одежды" class="h-full w-full object-cover object-center opacity-25 mix-blend-multiply lg:opacity-100 lg:[mask-image:linear-gradient(to_right,transparent,black_35%)]" loading="lazy"></div>
                    <div class="max-w-xl">
                        <p class="text-xs font-bold uppercase tracking-[0.2em]">Гид по стилю</p>
                        <h2 class="mt-4 text-4xl font-black leading-[0.95] tracking-[-0.06em] sm:text-6xl">Город меняется.<br>Ты тоже.</h2>
                        <p class="mt-5 max-w-md text-sm leading-6 text-[#17211c]/65 sm:text-base sm:leading-7">Простые сочетания на каждый день: собрали готовые образы, которые легко сделать своими.</p>
                        <a href="#" class="mt-8 inline-flex h-12 items-center justify-center gap-2 rounded-full bg-[#17211c] px-6 text-sm font-bold text-white transition hover:bg-emerald-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c]">Открыть подборку <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></a>
                    </div>
                </div>
            </section>

            <section id="about" class="border-y border-black/8 bg-[#f0efe7] dark:border-white/10 dark:bg-zinc-950">
                <div class="mx-auto grid max-w-[1440px] grid-cols-2 divide-x divide-y divide-black/8 px-4 sm:px-6 md:grid-cols-4 md:divide-y-0 lg:px-10 dark:divide-white/10">
                    <div class="flex flex-col gap-4 px-4 py-8 first:pl-0 sm:flex-row sm:items-center sm:px-6 lg:py-10">
                        <span class="grid size-10 shrink-0 place-items-center rounded-full bg-white dark:bg-zinc-900"><svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3 6h12v11H3V6Zm12 4h3l3 3v4h-6v-7ZM7 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm10 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" /></svg></span>
                        <div><p class="text-sm font-extrabold">Быстрая доставка</p><p class="mt-1 text-xs text-black/45 dark:text-white/45">от одного дня</p></div>
                    </div>
                    <div class="flex flex-col gap-4 px-4 py-8 sm:flex-row sm:items-center sm:px-6 lg:py-10">
                        <span class="grid size-10 shrink-0 place-items-center rounded-full bg-white dark:bg-zinc-900"><svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20Z" /><path stroke-linecap="round" d="M12 6v6l4 2" /></svg></span>
                        <div><p class="text-sm font-extrabold">Возврат 30 дней</p><p class="mt-1 text-xs text-black/45 dark:text-white/45">без лишних вопросов</p></div>
                    </div>
                    <div class="flex flex-col gap-4 px-4 py-8 sm:flex-row sm:items-center sm:px-6 lg:py-10">
                        <span class="grid size-10 shrink-0 place-items-center rounded-full bg-white dark:bg-zinc-900"><svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z" /><path stroke-linecap="round" stroke-linejoin="round" d="m9 11 2 2 4-4" /></svg></span>
                        <div><p class="text-sm font-extrabold">Безопасная оплата</p><p class="mt-1 text-xs text-black/45 dark:text-white/45">защищённое соединение</p></div>
                    </div>
                    <div class="flex flex-col gap-4 px-4 py-8 pr-0 sm:flex-row sm:items-center sm:px-6 lg:py-10">
                        <span class="grid size-10 shrink-0 place-items-center rounded-full bg-white dark:bg-zinc-900"><svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4v8Z" /></svg></span>
                        <div><p class="text-sm font-extrabold">Мы на связи</p><p class="mt-1 text-xs text-black/45 dark:text-white/45">каждый день, 9–21</p></div>
                    </div>
                </div>
            </section>

            <section class="bg-[#17211c] text-white">
                <div class="mx-auto grid max-w-[1440px] gap-10 px-4 py-14 sm:px-6 sm:py-16 lg:grid-cols-[1fr_auto] lg:items-center lg:px-10 lg:py-20">
                    <div class="max-w-2xl"><p class="text-xs font-bold uppercase tracking-[0.2em] text-lime-300">Только полезное</p><h2 class="mt-4 text-3xl font-black tracking-[-0.055em] sm:text-5xl">Новинки и закрытые распродажи — в вашей почте</h2></div>
                    <form class="w-full max-w-xl lg:w-[31rem]">
                        <label for="email" class="sr-only">Электронная почта</label>
                        <div class="flex flex-col gap-3 sm:flex-row">
                            <input id="email" type="email" placeholder="name@example.com" class="h-13 min-w-0 flex-1 rounded-full border-0 bg-white/10 px-5 text-sm text-white outline-none ring-1 ring-white/20 placeholder:text-white/45 focus:ring-2 focus:ring-lime-300">
                            <button type="submit" class="h-13 shrink-0 rounded-full bg-lime-300 px-6 text-sm font-bold text-[#17211c] transition hover:bg-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Подписаться</button>
                        </div>
                        <p class="mt-3 text-xs leading-5 text-white/40">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности.</p>
                    </form>
                </div>
            </section>
        </main>

        <footer class="bg-[#101713] text-white">
            <div class="mx-auto max-w-[1440px] px-4 py-12 sm:px-6 lg:px-10 lg:py-16">
                <div class="grid gap-10 border-b border-white/10 pb-12 sm:grid-cols-2 lg:grid-cols-[1.4fr_1fr_1fr_1fr]">
                    <div>
                        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white" aria-label="SFERA — на главную"><span class="grid size-10 place-items-center rounded-full bg-lime-300 text-[#17211c]"><svg class="size-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 17.5 12 4l7 13.5-7-3-7 3Z" fill="currentColor" /></svg></span><span class="text-2xl font-black tracking-[-0.06em]">SFERA</span></a>
                        <p class="mt-5 max-w-xs text-sm leading-6 text-white/45">Вещи для города, дома и движения. Выбираем то, чем хочется пользоваться каждый день.</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold">Покупателям</h3>
                        <nav class="mt-4 grid gap-3 text-sm text-white/50" aria-label="Покупателям"><a href="#" class="w-fit transition hover:text-white">Доставка и оплата</a><a href="#" class="w-fit transition hover:text-white">Обмен и возврат</a><a href="#" class="w-fit transition hover:text-white">Размерная сетка</a><a href="#" class="w-fit transition hover:text-white">Вопросы и ответы</a></nav>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold">О компании</h3>
                        <nav class="mt-4 grid gap-3 text-sm text-white/50" aria-label="О компании"><a href="#" class="w-fit transition hover:text-white">О нас</a><a href="#" class="w-fit transition hover:text-white">Магазины</a><a href="#" class="w-fit transition hover:text-white">Вакансии</a><a href="#" class="w-fit transition hover:text-white">Контакты</a></nav>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold">Связаться</h3>
                        <a href="tel:+78005553535" class="mt-4 block w-fit text-lg font-extrabold transition hover:text-lime-300">8 800 555-35-35</a>
                        <p class="mt-1 text-xs text-white/40">Бесплатно по России</p>
                        <div class="mt-5 flex gap-2"><a href="#" class="grid size-10 place-items-center rounded-full bg-white/8 text-xs font-bold transition hover:bg-lime-300 hover:text-[#17211c]" aria-label="Мы во ВКонтакте">VK</a><a href="#" class="grid size-10 place-items-center rounded-full bg-white/8 text-xs font-bold transition hover:bg-lime-300 hover:text-[#17211c]" aria-label="Мы в Telegram">TG</a></div>
                    </div>
                </div>
                <div class="flex flex-col gap-4 pt-7 text-xs text-white/35 sm:flex-row sm:items-center sm:justify-between">
                    <p>© {{ date('Y') }} SFERA. Все права защищены.</p>
                    <div class="flex flex-wrap gap-x-5 gap-y-2"><a href="#" class="transition hover:text-white">Политика конфиденциальности</a><a href="#" class="transition hover:text-white">Оферта</a></div>
                </div>
            </div>
        </footer>
    </body>
</html>
