@props(['title' => 'Панель управления'])

@php
    $catalogItems = [
        ['label' => 'Категории', 'href' => route('admin.categories.index'), 'active' => request()->routeIs('admin.categories.*')],
        ['label' => 'Товары', 'href' => '#', 'active' => false],
        ['label' => 'Фильтры', 'href' => '#', 'active' => false],
        ['label' => 'Уведомления', 'href' => '#', 'active' => false],
        ['label' => 'Атрибуты', 'href' => '#', 'active' => false],
        ['label' => 'Опции', 'href' => '#', 'active' => false],
        ['label' => 'Бренды', 'href' => '#', 'active' => false],
        ['label' => 'Отзывы', 'href' => '#', 'active' => false],
    ];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head', ['title' => $title])
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

                <nav class="mt-10 grid min-h-0 flex-1 content-start gap-1 overflow-y-auto pr-1" aria-label="Навигация администратора">
                    <p class="px-3 pb-2 text-[10px] font-bold uppercase tracking-[0.2em] text-white/30">Основное</p>
                    <a href="{{ route('admin') }}" @class([
                        'flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm transition',
                        'bg-white font-bold text-[#17211c]' => request()->routeIs('admin'),
                        'font-medium text-white/60 hover:bg-white/8 hover:text-white' => ! request()->routeIs('admin'),
                    ])>
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="2" /><rect x="14" y="3" width="7" height="7" rx="2" /><rect x="3" y="14" width="7" height="7" rx="2" /><rect x="14" y="14" width="7" height="7" rx="2" /></svg>
                        Обзор
                    </a>
                    <a href="{{ route('admin') }}#orders" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/60 transition hover:bg-white/8 hover:text-white">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14l-1 12H6L5 8Zm4 0V6a3 3 0 0 1 6 0v2" /></svg>
                        Продажи
                        <span class="ml-auto rounded-full bg-[#ff6b4a] px-2 py-0.5 text-[10px] font-bold text-white">12</span>
                    </a>

                    <details class="group/catalog" @if (request()->routeIs('admin.categories.*')) open @endif>
                        <summary @class([
                            'flex cursor-pointer list-none items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium transition focus-visible:outline-2 focus-visible:outline-offset-[-2px] focus-visible:outline-lime-300 [&::-webkit-details-marker]:hidden',
                            'bg-white/8 text-white' => request()->routeIs('admin.categories.*'),
                            'text-white/60 hover:bg-white/8 hover:text-white' => ! request()->routeIs('admin.categories.*'),
                        ])>
                            <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8-4 8 4-8 4-8-4Z" /><path stroke-linecap="round" stroke-linejoin="round" d="m4 12 8 4 8-4M4 17l8 4 8-4" /></svg>
                            Каталог
                            <svg class="ml-auto size-4 transition-transform duration-200 group-open/catalog:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" /></svg>
                        </summary>
                        <div class="ml-5 mt-1 grid gap-0.5 border-l border-white/10 pl-4">
                            @foreach ($catalogItems as $catalogItem)
                                <a href="{{ $catalogItem['href'] }}" @class([
                                    'rounded-lg px-3 py-2 text-xs font-medium transition focus-visible:outline-2 focus-visible:outline-lime-300',
                                    'bg-lime-300 text-[#17211c]' => $catalogItem['active'],
                                    'text-white/45 hover:bg-white/8 hover:text-white' => ! $catalogItem['active'],
                                ])>{{ $catalogItem['label'] }}</a>
                            @endforeach
                        </div>
                    </details>

                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/60 transition hover:bg-white/8 hover:text-white">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" /></svg>
                        Клиенты
                    </a>
                    <a href="{{ route('admin') }}#analytics" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-white/60 transition hover:bg-white/8 hover:text-white">
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

                <div class="mt-4 rounded-2xl bg-white/7 p-3">
                    <div class="flex items-center gap-3">
                        <span class="grid size-10 shrink-0 place-items-center rounded-full bg-[#ffbe98] text-xs font-black text-[#17211c]">АК</span>
                        <div class="min-w-0"><p class="truncate text-sm font-bold">Админ Котов</p><p class="truncate text-xs text-white/35">Администратор</p></div>
                        <button type="button" class="ml-auto grid size-8 shrink-0 place-items-center rounded-full text-white/45 transition hover:bg-white/10 hover:text-white" aria-label="Открыть меню профиля"><svg class="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><circle cx="5" cy="12" r="1.4" /><circle cx="12" cy="12" r="1.4" /><circle cx="19" cy="12" r="1.4" /></svg></button>
                    </div>
                </div>
            </aside>

            <div class="min-w-0">
                <header class="sticky top-0 z-30 border-b border-black/8 bg-[#f3f5f2]/90 backdrop-blur-xl dark:border-white/10 dark:bg-zinc-950/90">
                    <div class="flex h-17 items-center gap-3 px-4 sm:px-6 xl:px-8">
                        <details class="group/mobile-menu relative lg:hidden">
                            <summary class="grid size-10 cursor-pointer list-none place-items-center rounded-full border border-black/10 bg-white [&::-webkit-details-marker]:hidden dark:border-white/10 dark:bg-zinc-900">
                                <span class="sr-only">Открыть меню</span>
                                <svg class="size-5 group-open/mobile-menu:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" /></svg>
                                <svg class="hidden size-5 group-open/mobile-menu:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" /></svg>
                            </summary>
                            <div class="absolute left-0 top-13 max-h-[calc(100vh-5.5rem)] w-[min(20rem,calc(100vw-2rem))] overflow-y-auto rounded-3xl border border-black/8 bg-[#17211c] p-3 text-white shadow-2xl shadow-black/20 dark:border-white/10">
                                <div class="flex items-center gap-3 px-2 pb-4 pt-1"><span class="grid size-9 place-items-center rounded-full bg-lime-300 text-[#17211c]"><svg class="size-4" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 17.5 12 4l7 13.5-7-3-7 3Z" fill="currentColor" /></svg></span><span class="text-lg font-black tracking-[-0.05em]">SFERA <span class="text-xs font-semibold tracking-normal text-white/35">ADMIN</span></span></div>
                                <nav class="grid gap-1 text-sm font-medium" aria-label="Мобильная навигация администратора">
                                    <a href="{{ route('admin') }}" class="rounded-xl px-3 py-2.5 text-white/65 transition hover:bg-white/8 hover:text-white">Обзор</a>
                                    <a href="{{ route('admin') }}#orders" class="flex items-center rounded-xl px-3 py-2.5 text-white/65 transition hover:bg-white/8 hover:text-white">Продажи <span class="ml-auto rounded-full bg-[#ff6b4a] px-2 py-0.5 text-[10px] font-bold text-white">12</span></a>
                                    <details class="group/mobile-catalog" open>
                                        <summary class="flex cursor-pointer list-none items-center rounded-xl bg-white/8 px-3 py-2.5 text-white transition hover:bg-white/12 [&::-webkit-details-marker]:hidden">Каталог <svg class="ml-auto size-4 transition-transform duration-200 group-open/mobile-catalog:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" /></svg></summary>
                                        <div class="ml-3 grid gap-0.5 border-l border-white/10 pl-3">
                                            @foreach ($catalogItems as $catalogItem)
                                                <a href="{{ $catalogItem['href'] }}" @class([
                                                    'rounded-lg px-3 py-2 text-xs transition',
                                                    'bg-lime-300 font-bold text-[#17211c]' => $catalogItem['active'],
                                                    'text-white/45 hover:bg-white/8 hover:text-white' => ! $catalogItem['active'],
                                                ])>{{ $catalogItem['label'] }}</a>
                                            @endforeach
                                        </div>
                                    </details>
                                    <a href="#" class="rounded-xl px-3 py-2.5 text-white/65 transition hover:bg-white/8 hover:text-white">Клиенты</a>
                                    <a href="{{ route('admin') }}#analytics" class="rounded-xl px-3 py-2.5 text-white/65 transition hover:bg-white/8 hover:text-white">Аналитика</a>
                                    <a href="#" class="rounded-xl px-3 py-2.5 text-white/65 transition hover:bg-white/8 hover:text-white">Настройки</a>
                                </nav>
                            </div>
                        </details>

                        <a href="{{ route('home') }}" class="flex items-center gap-2 lg:hidden" aria-label="SFERA — перейти в магазин"><span class="text-lg font-black tracking-[-0.06em]">SFERA</span><span class="rounded-full bg-black/6 px-2 py-1 text-[9px] font-bold uppercase tracking-wider dark:bg-white/10">Admin</span></a>

                        <form role="search" class="ml-auto hidden w-full max-w-xs md:block lg:ml-0">
                            <label for="admin-layout-search" class="sr-only">Поиск в панели управления</label>
                            <div class="relative"><svg class="pointer-events-none absolute left-3.5 top-1/2 size-4 -translate-y-1/2 text-black/35 dark:text-white/35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="11" cy="11" r="6.5" /><path stroke-linecap="round" d="m16 16 4 4" /></svg><input id="admin-layout-search" type="search" placeholder="Поиск по заказам и товарам" class="h-10 w-full rounded-full border-0 bg-white pl-10 pr-4 text-xs outline-none ring-1 ring-black/8 placeholder:text-black/35 focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-900 dark:ring-white/10 dark:placeholder:text-white/35 dark:focus:ring-lime-300"></div>
                        </form>

                        <div class="ml-auto flex items-center gap-2">
                            <a href="{{ route('home') }}" class="hidden h-10 items-center gap-2 rounded-full bg-white px-4 text-xs font-bold ring-1 ring-black/8 transition hover:bg-[#17211c] hover:text-white sm:inline-flex dark:bg-zinc-900 dark:ring-white/10 dark:hover:bg-white dark:hover:text-[#17211c]"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M14 3h7v7M10 14 21 3M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5" /></svg>В магазин</a>
                            <button type="button" class="relative grid size-10 place-items-center rounded-full bg-white ring-1 ring-black/8 transition hover:bg-black hover:text-white dark:bg-zinc-900 dark:ring-white/10 dark:hover:bg-white dark:hover:text-[#17211c]" aria-label="Уведомления"><svg class="size-4.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9ZM14 21h-4" /></svg><span class="absolute right-1 top-1 size-2 rounded-full bg-[#ff6b4a] ring-2 ring-white dark:ring-zinc-900"></span></button>
                            <button type="button" class="grid size-10 place-items-center rounded-full bg-[#ffbe98] text-xs font-black text-[#17211c] ring-1 ring-black/8" aria-label="Профиль администратора">АК</button>
                        </div>
                    </div>
                </header>

                <main class="px-4 py-6 sm:px-6 sm:py-8 xl:px-8 xl:py-10">
                    <div class="mx-auto max-w-[1536px]">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
