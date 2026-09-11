@php
    $orders = [
        [
            'id' => '#SF-10482',
            'customer' => 'Анна Соколова',
            'email' => 'anna@example.com',
            'initials' => 'АС',
            'date' => 'Сегодня, 12:48',
            'amount' => '18 490 ₽',
            'status' => 'Оплачен',
            'statusClass' => 'bg-emerald-50 text-emerald-700 dark:bg-emerald-400/10 dark:text-emerald-300',
        ],
        [
            'id' => '#SF-10481',
            'customer' => 'Михаил Волков',
            'email' => 'm.volkov@example.com',
            'initials' => 'МВ',
            'date' => 'Сегодня, 11:32',
            'amount' => '9 990 ₽',
            'status' => 'Собирается',
            'statusClass' => 'bg-amber-50 text-amber-700 dark:bg-amber-400/10 dark:text-amber-300',
        ],
        [
            'id' => '#SF-10480',
            'customer' => 'Елена Ким',
            'email' => 'elena.kim@example.com',
            'initials' => 'ЕК',
            'date' => 'Сегодня, 10:16',
            'amount' => '27 350 ₽',
            'status' => 'Отправлен',
            'statusClass' => 'bg-blue-50 text-blue-700 dark:bg-blue-400/10 dark:text-blue-300',
        ],
        [
            'id' => '#SF-10479',
            'customer' => 'Иван Морозов',
            'email' => 'morozov@example.com',
            'initials' => 'ИМ',
            'date' => 'Вчера, 19:04',
            'amount' => '6 780 ₽',
            'status' => 'Возврат',
            'statusClass' => 'bg-rose-50 text-rose-700 dark:bg-rose-400/10 dark:text-rose-300',
        ],
    ];

    $stockItems = [
        [
            'name' => 'Кроссовки Motion 01',
            'sku' => 'SH-001-RED',
            'stock' => 4,
            'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=240&q=85',
        ],
        [
            'name' => 'Наушники Form',
            'sku' => 'AU-014-WHT',
            'stock' => 7,
            'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=240&q=85',
        ],
        [
            'name' => 'Сумка Weekend',
            'sku' => 'BG-008-BLK',
            'stock' => 9,
            'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=240&q=85',
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head', ['title' => 'Панель управления'])
        <meta name="description" content="Панель управления магазином SFERA.">
    </head>
    <body class="min-w-80 bg-[#f3f5f2] font-sans text-[#17211c] antialiased selection:bg-lime-300 selection:text-[#17211c] dark:bg-zinc-950 dark:text-zinc-50">
        <div class="min-h-screen lg:grid lg:grid-cols-[17.5rem_minmax(0,1fr)]">
            <aside class="hidden h-screen flex-col border-r border-black/8 bg-[#17211c] px-4 py-5 text-white lg:sticky lg:top-0 lg:flex dark:border-white/10">
                <a href="{{ route('home') }}" class="flex items-center gap-3 rounded-2xl px-2 py-1 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-300" aria-label="SFERA — перейти в магазин">
                    <span class="grid size-10 place-items-center rounded-full bg-lime-300 text-[#17211c]">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 17.5 12 4l7 13.5-7-3-7 3Z" fill="currentColor" /></svg>
                    </span>
                    <span>
                        <span class="block text-xl font-black tracking-[-0.06em]">SFERA</span>
                        <span class="block text-[10px] font-semibold uppercase tracking-[0.2em] text-white/35">Панель управления</span>
                    </span>
                </a>

                <nav class="mt-10 grid gap-1" aria-label="Навигация администратора">
                    <p class="px-3 pb-2 text-[10px] font-bold uppercase tracking-[0.2em] text-white/30">основное</p>
                    <a href="#" aria-current="page" class="flex items-center gap-3 rounded-xl bg-white px-3 py-2.5 text-sm font-bold text-[#17211c]">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="2" /><rect x="14" y="3" width="7" height="7" rx="2" /><rect x="3" y="14" width="7" height="7" rx="2" /><rect x="14" y="14" width="7" height="7" rx="2" /></svg>
                        Обзор
                    </a>
                    <a href="#orders" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/60 transition hover:bg-white/8 hover:text-white">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14l-1 12H6L5 8Zm4 0V6a3 3 0 0 1 6 0v2" /></svg>
                        Продажи
                        <span class="ml-auto rounded-full bg-[#ff6b4a] px-2 py-0.5 text-[10px] font-bold text-white">12</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/60 transition hover:bg-white/8 hover:text-white">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8-4 8 4-8 4-8-4Z" /><path stroke-linecap="round" stroke-linejoin="round" d="m4 12 8 4 8-4M4 17l8 4 8-4" /></svg>
                        Каталог
                    </a>
                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/60 transition hover:bg-white/8 hover:text-white">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" /></svg>
                        Клиенты
                    </a>
                    <a href="#analytics" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/60 transition hover:bg-white/8 hover:text-white">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" d="M4 20V10M10 20V4M16 20v-7M22 20V7" /></svg>
                        Аналитика
                    </a>

                    <p class="mt-7 px-3 pb-2 text-[10px] font-bold uppercase tracking-[0.2em] text-white/30">Управление</p>
                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/60 transition hover:bg-white/8 hover:text-white">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M20.6 13.6 11 23l-9-9V4h10l8.6 8.6a.7.7 0 0 1 0 1ZM7.5 8.5h.01" /></svg>
                        Промокоды
                    </a>
                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/60 transition hover:bg-white/8 hover:text-white">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><circle cx="12" cy="12" r="3" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.4 15a1.7 1.7 0 0 0 .3 1.9l.1.1-2.8 2.8-.1-.1a1.7 1.7 0 0 0-1.9-.3 1.7 1.7 0 0 0-1 1.6v.2h-4V21a1.7 1.7 0 0 0-1-1.6 1.7 1.7 0 0 0-1.9.3l-.1.1L4.2 17l.1-.1a1.7 1.7 0 0 0 .3-1.9A1.7 1.7 0 0 0 3 14H2.8v-4H3a1.7 1.7 0 0 0 1.6-1 1.7 1.7 0 0 0-.3-1.9L4.2 7 7 4.2l.1.1a1.7 1.7 0 0 0 1.9.3A1.7 1.7 0 0 0 10 3V2.8h4V3a1.7 1.7 0 0 0 1 1.6 1.7 1.7 0 0 0 1.9-.3l.1-.1L19.8 7l-.1.1a1.7 1.7 0 0 0-.3 1.9 1.7 1.7 0 0 0 1.6 1h.2v4H21a1.7 1.7 0 0 0-1.6 1Z" /></svg>
                        Настройки
                    </a>
                </nav>

                <div class="mt-auto rounded-2xl bg-white/7 p-3">
                    <div class="flex items-center gap-3">
                        <span class="grid size-10 shrink-0 place-items-center rounded-full bg-[#ffbe98] text-xs font-black text-[#17211c]">АК</span>
                        <div class="min-w-0">
                            <p class="truncate text-sm font-bold">Админ Котов</p>
                            <p class="truncate text-xs text-white/35">Администратор</p>
                        </div>
                        <button type="button" class="ml-auto grid size-8 shrink-0 place-items-center rounded-full text-white/45 transition hover:bg-white/10 hover:text-white" aria-label="Открыть меню профиля">
                            <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="5" cy="12" r="1" fill="currentColor" stroke="none" /><circle cx="12" cy="12" r="1" fill="currentColor" stroke="none" /><circle cx="19" cy="12" r="1" fill="currentColor" stroke="none" /></svg>
                        </button>
                    </div>
                </div>
            </aside>

            <div class="min-w-0">
                <header class="sticky top-0 z-30 border-b border-black/8 bg-[#f3f5f2]/90 backdrop-blur-xl dark:border-white/10 dark:bg-zinc-950/90">
                    <div class="flex h-17 items-center gap-3 px-4 sm:px-6 xl:px-8">
                        <details class="group relative lg:hidden">
                            <summary class="grid size-10 cursor-pointer list-none place-items-center rounded-full border border-black/10 bg-white [&::-webkit-details-marker]:hidden dark:border-white/10 dark:bg-zinc-900">
                                <span class="sr-only">Открыть меню</span>
                                <svg class="size-5 group-open:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" /></svg>
                                <svg class="hidden size-5 group-open:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" /></svg>
                            </summary>
                            <div class="absolute left-0 top-13 w-[min(20rem,calc(100vw-2rem))] rounded-3xl border border-black/8 bg-[#17211c] p-3 text-white shadow-2xl shadow-black/20 dark:border-white/10">
                                <div class="flex items-center gap-3 px-2 pb-4 pt-1">
                                    <span class="grid size-9 place-items-center rounded-full bg-lime-300 text-[#17211c]"><svg class="size-4" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 17.5 12 4l7 13.5-7-3-7 3Z" fill="currentColor" /></svg></span>
                                    <span class="text-lg font-black tracking-[-0.05em]">SFERA <span class="text-xs font-semibold tracking-normal text-white/35">ADMIN</span></span>
                                </div>
                                <nav class="grid gap-1 text-sm font-medium" aria-label="Мобильная навигация администратора">
                                    <a href="#" class="rounded-xl bg-white px-3 py-2.5 font-bold text-[#17211c]">Обзор</a>
                                    <a href="#orders" class="flex items-center rounded-xl px-3 py-2.5 text-white/65 hover:bg-white/8 hover:text-white">Заказы <span class="ml-auto rounded-full bg-[#ff6b4a] px-2 py-0.5 text-[10px] font-bold text-white">12</span></a>
                                    <a href="#" class="rounded-xl px-3 py-2.5 text-white/65 hover:bg-white/8 hover:text-white">Товары</a>
                                    <a href="#" class="rounded-xl px-3 py-2.5 text-white/65 hover:bg-white/8 hover:text-white">Клиенты</a>
                                    <a href="#analytics" class="rounded-xl px-3 py-2.5 text-white/65 hover:bg-white/8 hover:text-white">Аналитика</a>
                                    <a href="#" class="rounded-xl px-3 py-2.5 text-white/65 hover:bg-white/8 hover:text-white">Настройки</a>
                                </nav>
                            </div>
                        </details>

                        <a href="{{ route('home') }}" class="flex items-center gap-2 lg:hidden" aria-label="SFERA — перейти в магазин">
                            <span class="text-lg font-black tracking-[-0.06em]">SFERA</span>
                            <span class="rounded-full bg-black/6 px-2 py-1 text-[9px] font-bold uppercase tracking-wider dark:bg-white/10">Admin</span>
                        </a>

                        <form role="search" class="ml-auto hidden w-full max-w-xs md:block lg:ml-0">
                            <label for="admin-search" class="sr-only">Поиск в панели управления</label>
                            <div class="relative">
                                <svg class="pointer-events-none absolute left-3.5 top-1/2 size-4 -translate-y-1/2 text-black/35 dark:text-white/35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="11" cy="11" r="6.5" /><path stroke-linecap="round" d="m16 16 4 4" /></svg>
                                <input id="admin-search" type="search" placeholder="Поиск по заказам и товарам" class="h-10 w-full rounded-full border-0 bg-white pl-10 pr-4 text-xs outline-none ring-1 ring-black/8 placeholder:text-black/35 focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-900 dark:ring-white/10 dark:placeholder:text-white/35 dark:focus:ring-lime-300">
                            </div>
                        </form>

                        <div class="ml-auto flex items-center gap-2">
                            <a href="{{ route('home') }}" class="hidden h-10 items-center gap-2 rounded-full bg-white px-4 text-xs font-bold ring-1 ring-black/8 transition hover:bg-[#17211c] hover:text-white sm:inline-flex dark:bg-zinc-900 dark:ring-white/10 dark:hover:bg-white dark:hover:text-[#17211c]">
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M14 3h7v7M10 14 21 3M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5" /></svg>
                                В магазин
                            </a>
                            <button type="button" class="relative grid size-10 place-items-center rounded-full bg-white ring-1 ring-black/8 transition hover:bg-black hover:text-white dark:bg-zinc-900 dark:ring-white/10 dark:hover:bg-white dark:hover:text-[#17211c]" aria-label="Уведомления">
                                <svg class="size-4.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9ZM14 21h-4" /></svg>
                                <span class="absolute right-1 top-1 size-2 rounded-full bg-[#ff6b4a] ring-2 ring-white dark:ring-zinc-900"></span>
                            </button>
                            <button type="button" class="grid size-10 place-items-center rounded-full bg-[#ffbe98] text-xs font-black text-[#17211c] ring-1 ring-black/8" aria-label="Профиль Алексея Котова">АК</button>
                        </div>
                    </div>
                </header>

                <main class="px-4 py-6 sm:px-6 sm:py-8 xl:px-8 xl:py-10">
                    <div class="mx-auto max-w-[1536px]">
                        <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.18em] text-emerald-700 dark:text-lime-300">11 сентября, пятница</p>
                                <h1 class="mt-2 text-3xl font-black tracking-[-0.055em] sm:text-4xl">Добрый день, Админ</h1>
                                <p class="mt-2 text-sm text-black/45 dark:text-white/45">Вот что происходит в магазине сегодня.</p>
                            </div>
                            <div class="flex gap-2">
                                <button type="button" class="inline-flex h-11 items-center justify-center gap-2 rounded-full bg-white px-4 text-xs font-bold ring-1 ring-black/8 transition hover:bg-black hover:text-white dark:bg-zinc-900 dark:ring-white/10 dark:hover:bg-white dark:hover:text-[#17211c]">
                                    <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 2v3M18 2v3M3 9h18M5 4h14a2 2 0 0 1 2 2v14H3V6a2 2 0 0 1 2-2Z" /></svg>
                                    1–11 сентября
                                </button>
                                <button type="button" class="grid size-11 place-items-center rounded-full bg-[#17211c] text-white transition hover:bg-emerald-800 dark:bg-lime-300 dark:text-[#17211c] dark:hover:bg-white" aria-label="Скачать отчёт">
                                    <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v12m0 0 4-4m-4 4-4-4M4 19h16" /></svg>
                                </button>
                            </div>
                        </div>

                        <section class="mt-7 grid gap-3 sm:grid-cols-2 xl:grid-cols-4" aria-label="Ключевые показатели">
                            <article class="rounded-3xl bg-[#17211c] p-5 text-white shadow-sm sm:p-6">
                                <div class="flex items-center justify-between gap-4">
                                    <p class="text-xs font-semibold text-white/50">Выручка</p>
                                    <span class="rounded-full bg-lime-300/15 px-2 py-1 text-[10px] font-bold text-lime-300">+12,4%</span>
                                </div>
                                <p class="mt-5 text-3xl font-black tracking-[-0.05em]">1 284 900 ₽</p>
                                <div class="mt-6 flex items-end justify-between gap-4">
                                    <p class="text-[11px] text-white/35">против 1 143 200 ₽</p>
                                    <svg class="h-8 w-24 text-lime-300" viewBox="0 0 96 32" fill="none" aria-hidden="true"><path d="M1 28C10 25 10 18 19 21s11 5 18-3 10-13 17-8 8 11 16 5S82 4 95 2" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" /></svg>
                                </div>
                            </article>

                            <article class="rounded-3xl bg-white p-5 shadow-sm ring-1 ring-black/5 sm:p-6 dark:bg-zinc-900 dark:ring-white/10">
                                <div class="flex items-center justify-between gap-4"><p class="text-xs font-semibold text-black/45 dark:text-white/45">Заказы</p><span class="rounded-full bg-emerald-50 px-2 py-1 text-[10px] font-bold text-emerald-700 dark:bg-emerald-400/10 dark:text-emerald-300">+8,2%</span></div>
                                <p class="mt-5 text-3xl font-black tracking-[-0.05em]">1 482</p>
                                <div class="mt-6 flex items-end justify-between gap-4"><p class="text-[11px] text-black/35 dark:text-white/35">112 новых сегодня</p><svg class="h-8 w-24 text-emerald-600" viewBox="0 0 96 32" fill="none" aria-hidden="true"><path d="M1 26c8-2 11-9 19-6s10 7 18 0 12-13 20-8 11 8 18 1S87 7 95 3" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" /></svg></div>
                            </article>

                            <article class="rounded-3xl bg-white p-5 shadow-sm ring-1 ring-black/5 sm:p-6 dark:bg-zinc-900 dark:ring-white/10">
                                <div class="flex items-center justify-between gap-4"><p class="text-xs font-semibold text-black/45 dark:text-white/45">Средний чек</p><span class="rounded-full bg-rose-50 px-2 py-1 text-[10px] font-bold text-rose-700 dark:bg-rose-400/10 dark:text-rose-300">−2,1%</span></div>
                                <p class="mt-5 text-3xl font-black tracking-[-0.05em]">8 670 ₽</p>
                                <div class="mt-6 flex items-end justify-between gap-4"><p class="text-[11px] text-black/35 dark:text-white/35">было 8 856 ₽</p><svg class="h-8 w-24 text-[#ff6b4a]" viewBox="0 0 96 32" fill="none" aria-hidden="true"><path d="M1 5c10 2 10 8 19 6s11-6 19 0 10 11 18 8 12-8 20-3 10 10 18 12" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" /></svg></div>
                            </article>

                            <article class="rounded-3xl bg-[#e1f399] p-5 text-[#17211c] shadow-sm sm:p-6">
                                <div class="flex items-center justify-between gap-4"><p class="text-xs font-semibold text-[#17211c]/55">Новые клиенты</p><span class="rounded-full bg-[#17211c]/8 px-2 py-1 text-[10px] font-bold">+18,7%</span></div>
                                <p class="mt-5 text-3xl font-black tracking-[-0.05em]">328</p>
                                <div class="mt-6 flex items-end justify-between gap-4"><p class="text-[11px] text-[#17211c]/40">64% вернулись снова</p><div class="flex -space-x-2"><span class="grid size-7 place-items-center rounded-full bg-[#ffbe98] text-[8px] font-black ring-2 ring-[#e1f399]">АС</span><span class="grid size-7 place-items-center rounded-full bg-sky-200 text-[8px] font-black ring-2 ring-[#e1f399]">МК</span><span class="grid size-7 place-items-center rounded-full bg-white text-[8px] font-black ring-2 ring-[#e1f399]">+26</span></div></div>
                            </article>
                        </section>

                        <section id="analytics" class="mt-4 grid scroll-mt-24 gap-4 xl:grid-cols-[minmax(0,1.7fr)_minmax(19rem,0.7fr)]">
                            <article class="overflow-hidden rounded-3xl bg-white p-5 shadow-sm ring-1 ring-black/5 sm:p-6 dark:bg-zinc-900 dark:ring-white/10">
                                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                    <div><h2 class="text-base font-extrabold">Динамика продаж</h2><p class="mt-1 text-xs text-black/40 dark:text-white/40">Выручка за последние 11 дней</p></div>
                                    <div class="flex w-fit rounded-full bg-[#f3f5f2] p-1 text-[11px] font-bold dark:bg-zinc-800"><button type="button" class="rounded-full bg-white px-3 py-1.5 shadow-sm dark:bg-zinc-700">Дни</button><button type="button" class="rounded-full px-3 py-1.5 text-black/40 dark:text-white/40">Недели</button><button type="button" class="rounded-full px-3 py-1.5 text-black/40 dark:text-white/40">Месяцы</button></div>
                                </div>
                                <div class="mt-8 overflow-hidden">
                                    <div class="flex items-center gap-5 text-[10px] font-semibold text-black/40 dark:text-white/40"><span class="inline-flex items-center gap-2"><span class="size-2 rounded-full bg-[#17211c] dark:bg-lime-300"></span>Этот период</span><span class="inline-flex items-center gap-2"><span class="size-2 rounded-full bg-black/15 dark:bg-white/20"></span>Прошлый период</span></div>
                                    <svg class="mt-5 h-auto min-h-52 w-full overflow-visible" viewBox="0 0 800 260" role="img" aria-labelledby="sales-chart-title">
                                        <title id="sales-chart-title">График выручки с 1 по 11 сентября</title>
                                        <defs><linearGradient id="sales-fill" x1="0" y1="0" x2="0" y2="1"><stop stop-color="#b8db3b" stop-opacity=".45" /><stop offset="1" stop-color="#b8db3b" stop-opacity="0" /></linearGradient></defs>
                                        <g class="stroke-black/8 dark:stroke-white/10" stroke-width="1"><path d="M45 20H790M45 75H790M45 130H790M45 185H790M45 240H790" /></g>
                                        <g class="fill-black/35 text-[10px] dark:fill-white/35"><text x="0" y="24">160К</text><text x="7" y="79">120К</text><text x="14" y="134">80К</text><text x="14" y="189">40К</text><text x="29" y="244">0</text></g>
                                        <path d="M45 214C92 207 99 175 145 182s55-32 100-20 51-47 95-35 53 48 98 25 56-85 102-65 45 58 91 32 56-73 101-61 39 43 58 35" fill="none" class="stroke-black/15 dark:stroke-white/20" stroke-width="2" stroke-linecap="round" stroke-dasharray="5 7" />
                                        <path d="M45 221C84 214 105 191 145 196s58-45 100-34 48-12 95-23 54-48 98-25 58 35 102-2 50-46 91-24 58-64 101-47 42 23 58 16V240H45Z" fill="url(#sales-fill)" />
                                        <path d="M45 221C84 214 105 191 145 196s58-45 100-34 48-12 95-23 54-48 98-25 58 35 102-2 50-46 91-24 58-64 101-47 42 23 58 16" fill="none" class="stroke-[#17211c] dark:stroke-lime-300" stroke-width="3.5" stroke-linecap="round" />
                                        <g fill="#b8db3b" stroke="#fff" stroke-width="3"><circle cx="340" cy="139" r="5" /><circle cx="631" cy="88" r="5" /><circle cx="732" cy="41" r="5" /></g>
                                        <g class="fill-black/35 text-[10px] dark:fill-white/35" text-anchor="middle"><text x="45" y="258">1 сен</text><text x="190" y="258">3 сен</text><text x="340" y="258">5 сен</text><text x="490" y="258">7 сен</text><text x="635" y="258">9 сен</text><text x="785" y="258">11 сен</text></g>
                                    </svg>
                                </div>
                            </article>

                            <article class="rounded-3xl bg-white p-5 shadow-sm ring-1 ring-black/5 sm:p-6 dark:bg-zinc-900 dark:ring-white/10">
                                <div><h2 class="text-base font-extrabold">Продажи по категориям</h2><p class="mt-1 text-xs text-black/40 dark:text-white/40">Доля в общей выручке</p></div>
                                <div class="relative mx-auto mt-8 grid size-48 place-items-center">
                                    <svg class="size-full -rotate-90" viewBox="0 0 160 160" aria-hidden="true">
                                        <circle cx="80" cy="80" r="58" fill="none" class="stroke-black/5 dark:stroke-white/8" stroke-width="22" />
                                        <circle cx="80" cy="80" r="58" fill="none" stroke="#183a2f" stroke-width="22" stroke-dasharray="153 365" stroke-linecap="round" />
                                        <circle cx="80" cy="80" r="58" fill="none" stroke="#b8db3b" stroke-width="22" stroke-dasharray="102 365" stroke-dashoffset="-158" stroke-linecap="round" />
                                        <circle cx="80" cy="80" r="58" fill="none" stroke="#ff6b4a" stroke-width="22" stroke-dasharray="66 365" stroke-dashoffset="-265" stroke-linecap="round" />
                                        <circle cx="80" cy="80" r="58" fill="none" stroke="#bfd8e8" stroke-width="22" stroke-dasharray="29 365" stroke-dashoffset="-336" stroke-linecap="round" />
                                    </svg>
                                    <div class="absolute text-center"><p class="text-3xl font-black tracking-[-0.05em]">1,28М</p><p class="mt-0.5 text-[10px] text-black/40 dark:text-white/40">выручка</p></div>
                                </div>
                                <div class="mt-8 grid gap-3 text-xs">
                                    <div class="flex items-center"><span class="mr-2.5 size-2.5 rounded-full bg-[#183a2f] dark:bg-emerald-700"></span><span class="text-black/55 dark:text-white/55">Одежда</span><span class="ml-auto font-extrabold">42%</span></div>
                                    <div class="flex items-center"><span class="mr-2.5 size-2.5 rounded-full bg-[#b8db3b]"></span><span class="text-black/55 dark:text-white/55">Обувь</span><span class="ml-auto font-extrabold">28%</span></div>
                                    <div class="flex items-center"><span class="mr-2.5 size-2.5 rounded-full bg-[#ff6b4a]"></span><span class="text-black/55 dark:text-white/55">Аксессуары</span><span class="ml-auto font-extrabold">18%</span></div>
                                    <div class="flex items-center"><span class="mr-2.5 size-2.5 rounded-full bg-[#bfd8e8]"></span><span class="text-black/55 dark:text-white/55">Остальное</span><span class="ml-auto font-extrabold">12%</span></div>
                                </div>
                            </article>
                        </section>

                        <section class="mt-4 grid gap-4 xl:grid-cols-[minmax(0,1.7fr)_minmax(19rem,0.7fr)]">
                            <article id="orders" class="min-w-0 scroll-mt-24 overflow-hidden rounded-3xl bg-white shadow-sm ring-1 ring-black/5 dark:bg-zinc-900 dark:ring-white/10">
                                <div class="flex items-center justify-between gap-4 px-5 py-5 sm:px-6">
                                    <div><h2 class="text-base font-extrabold">Последние заказы</h2><p class="mt-1 text-xs text-black/40 dark:text-white/40">Обновлено минуту назад</p></div>
                                    <a href="#" class="inline-flex h-9 items-center gap-1.5 rounded-full border border-black/10 px-3 text-xs font-bold transition hover:bg-black hover:text-white dark:border-white/10 dark:hover:bg-white dark:hover:text-[#17211c]">Все заказы <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></a>
                                </div>

                                <div class="hidden overflow-x-auto md:block">
                                    <table class="w-full min-w-[720px] border-collapse text-left">
                                        <thead><tr class="border-y border-black/6 bg-[#fafbf9] text-[10px] font-bold uppercase tracking-[0.14em] text-black/35 dark:border-white/8 dark:bg-zinc-950/40 dark:text-white/35"><th class="px-6 py-3 font-bold">Заказ</th><th class="px-4 py-3 font-bold">Клиент</th><th class="px-4 py-3 font-bold">Дата</th><th class="px-4 py-3 font-bold">Сумма</th><th class="px-4 py-3 font-bold">Статус</th><th class="px-6 py-3"><span class="sr-only">Действия</span></th></tr></thead>
                                        <tbody class="divide-y divide-black/6 dark:divide-white/8">
                                            @foreach ($orders as $order)
                                                <tr class="text-xs transition hover:bg-[#f8faf6] dark:hover:bg-white/3">
                                                    <td class="px-6 py-4 font-extrabold">{{ $order['id'] }}</td>
                                                    <td class="px-4 py-4"><div class="flex items-center gap-3"><span class="grid size-8 shrink-0 place-items-center rounded-full bg-[#e4efb4] text-[9px] font-black text-[#17211c]">{{ $order['initials'] }}</span><div class="min-w-0"><p class="truncate font-bold">{{ $order['customer'] }}</p><p class="mt-0.5 truncate text-[10px] text-black/35 dark:text-white/35">{{ $order['email'] }}</p></div></div></td>
                                                    <td class="whitespace-nowrap px-4 py-4 text-black/45 dark:text-white/45">{{ $order['date'] }}</td>
                                                    <td class="whitespace-nowrap px-4 py-4 font-extrabold">{{ $order['amount'] }}</td>
                                                    <td class="px-4 py-4"><span class="inline-flex rounded-full px-2.5 py-1 text-[10px] font-bold {{ $order['statusClass'] }}">{{ $order['status'] }}</span></td>
                                                    <td class="px-6 py-4 text-right"><button type="button" class="grid size-8 place-items-center rounded-full transition hover:bg-black/5 dark:hover:bg-white/8" aria-label="Действия для заказа {{ $order['id'] }}"><svg class="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><circle cx="5" cy="12" r="1.4" /><circle cx="12" cy="12" r="1.4" /><circle cx="19" cy="12" r="1.4" /></svg></button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="divide-y divide-black/6 border-t border-black/6 md:hidden dark:divide-white/8 dark:border-white/8">
                                    @foreach ($orders as $order)
                                        <div class="p-5">
                                            <div class="flex items-start gap-3"><span class="grid size-9 shrink-0 place-items-center rounded-full bg-[#e4efb4] text-[9px] font-black text-[#17211c]">{{ $order['initials'] }}</span><div class="min-w-0"><p class="truncate text-sm font-bold">{{ $order['customer'] }}</p><p class="mt-1 text-[11px] text-black/40 dark:text-white/40">{{ $order['id'] }} · {{ $order['date'] }}</p></div><span class="ml-auto inline-flex rounded-full px-2.5 py-1 text-[10px] font-bold {{ $order['statusClass'] }}">{{ $order['status'] }}</span></div>
                                            <div class="mt-4 flex items-center justify-between border-t border-black/6 pt-3 dark:border-white/8"><span class="text-xs text-black/40 dark:text-white/40">Сумма заказа</span><span class="text-sm font-extrabold">{{ $order['amount'] }}</span></div>
                                        </div>
                                    @endforeach
                                </div>
                            </article>

                            <article class="rounded-3xl bg-white p-5 shadow-sm ring-1 ring-black/5 sm:p-6 dark:bg-zinc-900 dark:ring-white/10">
                                <div class="flex items-center justify-between gap-4"><div><h2 class="text-base font-extrabold">Заканчиваются</h2><p class="mt-1 text-xs text-black/40 dark:text-white/40">Осталось меньше 10 штук</p></div><span class="grid size-9 place-items-center rounded-full bg-amber-50 text-amber-700 dark:bg-amber-400/10 dark:text-amber-300"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M10.3 3.6 2.2 18a2 2 0 0 0 1.8 3h16a2 2 0 0 0 1.8-3L13.7 3.6a2 2 0 0 0-3.4 0Z" /></svg></span></div>
                                <div class="mt-6 grid gap-4">
                                    @foreach ($stockItems as $item)
                                        <div class="flex items-center gap-3">
                                            <img src="{{ $item['image'] }}" alt="" class="size-12 rounded-xl bg-[#f3f5f2] object-cover dark:bg-zinc-800" loading="lazy">
                                            <div class="min-w-0"><p class="truncate text-xs font-extrabold">{{ $item['name'] }}</p><p class="mt-1 text-[10px] text-black/35 dark:text-white/35">{{ $item['sku'] }}</p></div>
                                            <div class="ml-auto text-right"><p class="text-sm font-black {{ $item['stock'] <= 5 ? 'text-[#e75638]' : '' }}">{{ $item['stock'] }}</p><p class="text-[9px] text-black/35 dark:text-white/35">шт.</p></div>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button" class="mt-6 h-10 w-full rounded-full border border-black/10 text-xs font-bold transition hover:bg-[#17211c] hover:text-white dark:border-white/10 dark:hover:bg-lime-300 dark:hover:text-[#17211c]">Управление остатками</button>
                            </article>
                        </section>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
