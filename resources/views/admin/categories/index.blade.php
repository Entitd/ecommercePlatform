@php
    $local_categories = [
        [
            'name' => 'Одежда',
            'slug' => 'odezhda',
            'parent' => '—',
            'products' => 248,
            'placement' => 'Главная и меню',
            'active' => true,
            'level' => 0,
            'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=240&q=80',
        ],
        [
            'name' => 'Верхняя одежда',
            'slug' => 'verhnyaya-odezhda',
            'parent' => 'Одежда',
            'products' => 64,
            'placement' => 'Каталог и меню',
            'active' => true,
            'level' => 1,
            'image' => 'https://images.unsplash.com/photo-1539533113208-f6df8cc8b543?auto=format&fit=crop&w=240&q=80',
        ],
        [
            'name' => 'Футболки и топы',
            'slug' => 'futbolki-i-topy',
            'parent' => 'Одежда',
            'products' => 92,
            'placement' => 'Только каталог',
            'active' => true,
            'level' => 1,
            'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=240&q=80',
        ],
        [
            'name' => 'Обувь',
            'slug' => 'obuv',
            'parent' => '—',
            'products' => 156,
            'placement' => 'Главная и меню',
            'active' => true,
            'level' => 0,
            'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=240&q=80',
        ],
        [
            'name' => 'Кроссовки',
            'slug' => 'krossovki',
            'parent' => 'Обувь',
            'products' => 87,
            'placement' => 'Каталог и меню',
            'active' => true,
            'level' => 1,
            'image' => 'https://images.unsplash.com/photo-1608231387042-66d1773070a5?auto=format&fit=crop&w=240&q=80',
        ],
        [
            'name' => 'Аксессуары',
            'slug' => 'aksessuary',
            'parent' => '—',
            'products' => 94,
            'placement' => 'Главная и меню',
            'active' => true,
            'level' => 0,
            'image' => 'https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?auto=format&fit=crop&w=240&q=80',
        ],
        [
            'name' => 'Техника',
            'slug' => 'tehnika',
            'parent' => '—',
            'products' => 121,
            'placement' => 'Главная и меню',
            'active' => true,
            'level' => 0,
            'image' => 'https://images.unsplash.com/photo-1498049794561-7780e7231661?auto=format&fit=crop&w=240&q=80',
        ],
        [
            'name' => 'Для дома',
            'slug' => 'dlya-doma',
            'parent' => '—',
            'products' => 183,
            'placement' => 'Главная и меню',
            'active' => true,
            'level' => 0,
            'image' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=240&q=80',
        ],
        [
            'name' => 'Спорт',
            'slug' => 'sport',
            'parent' => '—',
            'products' => 87,
            'placement' => 'Скрыта',
            'active' => false,
            'level' => 0,
            'image' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=240&q=80',
        ],
    ];
@endphp

<x-admin.layout title="Категории">
    <section>
        <nav class="flex items-center gap-2 text-xs text-black/35 dark:text-white/35" aria-label="Хлебные крошки">
            <a href="{{ route('admin') }}" class="transition hover:text-[#17211c] dark:hover:text-white">Обзор</a>
            <svg class="size-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg>
            <span class="font-semibold text-[#17211c] dark:text-white">Категории</span>
        </nav>

        <div class="mt-5 flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-emerald-700 dark:text-lime-300">Каталог</p>
                <div class="mt-2 flex items-center gap-3">
                    <h1 class="text-3xl font-black tracking-[-0.055em] sm:text-4xl">Категории</h1>
                    <span class="rounded-full bg-black/6 px-2.5 py-1 text-xs font-bold text-black/45 dark:bg-white/10 dark:text-white/45">{{ count($local_categories) }}</span>
                </div>
                <p class="mt-2 text-sm text-black/45 dark:text-white/45">Управляйте структурой каталога и отображением разделов на витрине.</p>
            </div>

            <a href="{{ route('admin.categories.create') }}" class="inline-flex h-11 w-fit items-center justify-center gap-2 rounded-full bg-[#17211c] px-5 text-xs font-bold text-white transition hover:bg-emerald-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] dark:bg-lime-300 dark:text-[#17211c] dark:hover:bg-white dark:focus-visible:outline-white">
                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" d="M12 5v14M5 12h14" /></svg>
                Добавить категорию
            </a>
        </div>

        <div class="mt-7 grid gap-3 sm:grid-cols-3">
            <article class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-black/5 dark:bg-zinc-900 dark:ring-white/10">
                <p class="text-[11px] font-semibold text-black/40 dark:text-white/40">Всего категорий</p>
                <div class="mt-3 flex items-end justify-between gap-3"><p class="text-2xl font-black">{{ count($categories) }}</p><span class="grid size-8 place-items-center rounded-full bg-[#e1f399] text-[#17211c]"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8-4 8 4-8 4-8-4Z" /><path stroke-linecap="round" stroke-linejoin="round" d="m4 12 8 4 8-4M4 17l8 4 8-4" /></svg></span></div>
            </article>
            <article class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-black/5 dark:bg-zinc-900 dark:ring-white/10">
                <p class="text-[11px] font-semibold text-black/40 dark:text-white/40">Активные</p>
                <div class="mt-3 flex items-end justify-between gap-3"><p class="text-2xl font-black">8</p><span class="rounded-full bg-emerald-50 px-2.5 py-1 text-[10px] font-bold text-emerald-700 dark:bg-emerald-400/10 dark:text-emerald-300">88%</span></div>
            </article>
            <article class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-black/5 dark:bg-zinc-900 dark:ring-white/10">
                <p class="text-[11px] font-semibold text-black/40 dark:text-white/40">Товаров распределено</p>
                <div class="mt-3 flex items-end justify-between gap-3"><p class="text-2xl font-black">1 132</p><span class="text-[10px] text-black/35 dark:text-white/35">по 9 категориям</span></div>
            </article>
        </div>

        <div class="mt-4 overflow-hidden rounded-3xl bg-white shadow-sm ring-1 ring-black/5 dark:bg-zinc-900 dark:ring-white/10">
            <div class="flex flex-col gap-3 border-b border-black/6 p-4 sm:flex-row sm:items-center sm:justify-between sm:px-5 dark:border-white/8">
                <form role="search" class="w-full sm:max-w-sm">
                    <label for="category-search" class="sr-only">Поиск категорий</label>
                    <div class="relative">
                        <svg class="pointer-events-none absolute left-3.5 top-1/2 size-4 -translate-y-1/2 text-black/35 dark:text-white/35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="11" cy="11" r="6.5" /><path stroke-linecap="round" d="m16 16 4 4" /></svg>
                        <input id="category-search" type="search" placeholder="Найти категорию" class="h-10 w-full rounded-full border-0 bg-[#f5f6f3] pl-10 pr-4 text-xs outline-none ring-1 ring-black/6 placeholder:text-black/30 focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-800 dark:ring-white/10 dark:placeholder:text-white/30 dark:focus:ring-lime-300">
                    </div>
                </form>

                <div class="flex items-center gap-2">
                    <div class="relative flex-1 sm:flex-none">
                        <select aria-label="Фильтр по статусу" class="h-10 w-full appearance-none rounded-full border-0 bg-[#f5f6f3] pl-4 pr-9 text-xs font-semibold outline-none ring-1 ring-black/6 focus:ring-2 focus:ring-emerald-700 sm:w-36 dark:bg-zinc-800 dark:ring-white/10 dark:focus:ring-lime-300">
                            <option>Все статусы</option>
                            <option>Активные</option>
                            <option>Скрытые</option>
                        </select>
                        <svg class="pointer-events-none absolute right-3 top-1/2 size-4 -translate-y-1/2 text-black/40 dark:text-white/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" /></svg>
                    </div>
                    <button type="button" class="grid size-10 shrink-0 place-items-center rounded-full bg-[#f5f6f3] ring-1 ring-black/6 transition hover:bg-black hover:text-white dark:bg-zinc-800 dark:ring-white/10 dark:hover:bg-white dark:hover:text-[#17211c]" aria-label="Настроить отображение"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" d="M4 7h16M7 12h10M10 17h4" /></svg></button>
                </div>
            </div>

            <div class="hidden overflow-x-auto md:block">
                <table class="w-full min-w-[960px] border-collapse text-left">
                    <thead>
                        <tr class="border-b border-black/6 bg-[#fafbf9] text-[10px] font-bold uppercase tracking-[0.14em] text-black/35 dark:border-white/8 dark:bg-zinc-950/40 dark:text-white/35">
                            <th class="px-5 py-3 font-bold">Категория</th>
                            <th class="px-4 py-3 font-bold">Родительская</th>
                            <th class="px-4 py-3 text-center font-bold">Товары</th>
                            <th class="px-4 py-3 font-bold">Отображение</th>
                            <th class="px-4 py-3 font-bold">Статус</th>
                            <th class="px-5 py-3 text-right font-bold">Действия</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-black/6 dark:divide-white/8">
                        @foreach ($categories as $category)
                            <tr class="text-xs transition hover:bg-[#f8faf6] dark:hover:bg-white/3">
                                <td class="px-5 py-3.5">
                                    <div @class(['flex items-center gap-3', 'pl-6' => $category['sorting_order'] > 0])>
                                        @if ($category['sorting_order'] > 0)
                                            <svg class="-ml-5 size-3.5 shrink-0 text-black/25 dark:text-white/25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 5v8a4 4 0 0 0 4 4h10m0 0-3-3m3 3-3 3" /></svg>
                                        @endif
                                        <img src="{{ $category['image_path_icon'] }}" alt="" class="size-11 shrink-0 rounded-xl bg-[#f3f5f2] object-cover dark:bg-zinc-800" loading="lazy">
                                        <div class="min-w-0"><p class="truncate font-extrabold">{{ $category['name'] }}</p><p class="mt-1 truncate text-[10px] text-black/35 dark:text-white/35">/catalog/{{ $category['slug'] }}</p></div>
                                    </div>
                                </td>
                                <td class="px-4 py-3.5 text-black/45 dark:text-white/45">{{ $category['parent_category_id'] }}</td>
                                <td class="px-4 py-3.5 text-center font-extrabold">{{ $category['products'] }}</td>
                                <td class="px-4 py-3.5 text-black/45 dark:text-white/45">{{ $category['placement'] }}</td>
                                <td class="px-4 py-3.5">
                                    <span @class([
                                        'inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[10px] font-bold',
                                        'bg-emerald-50 text-emerald-700 dark:bg-emerald-400/10 dark:text-emerald-300' => $category['active'],
                                        'bg-zinc-100 text-zinc-500 dark:bg-white/8 dark:text-white/45' => ! $category['active'],
                                    ])><span @class(['size-1.5 rounded-full', 'bg-emerald-500' => $category['active'], 'bg-zinc-400' => ! $category['active']])></span>{{ $category['active'] ? 'Активна' : 'Скрыта' }}</span>
                                </td>
                                <td class="px-5 py-3.5">
                                    <div class="flex justify-end gap-2">
                                        <button type="button" class="inline-flex h-9 items-center gap-1.5 rounded-full px-3 text-[11px] font-bold ring-1 ring-black/10 transition hover:bg-[#17211c] hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] dark:ring-white/10 dark:hover:bg-white dark:hover:text-[#17211c] dark:focus-visible:outline-white"><svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m14 4 6 6L8 22H2v-6L14 4Zm-3 3 6 6" /></svg>Редактировать</button>
                                        <button type="button" class="inline-flex h-9 items-center gap-1.5 rounded-full px-3 text-[11px] font-bold text-rose-600 ring-1 ring-rose-200 transition hover:bg-rose-600 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-600 dark:text-rose-400 dark:ring-rose-400/20"><svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M9 7V4h6v3m3 0-1 14H7L6 7m4 4v6m4-6v6" /></svg>Удалить</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

{{-- -------------------------------------------------- --}}
                    <tbody class="divide-y divide-black/6 dark:divide-white/8">
                        @foreach ($local_categories as $category)
                            <tr class="text-xs transition hover:bg-[#f8faf6] dark:hover:bg-white/3">
                                <td class="px-5 py-3.5">
                                    <div @class(['flex items-center gap-3', 'pl-6' => $category['level'] > 0])>
                                        @if ($category['level'] > 0)
                                            <svg class="-ml-5 size-3.5 shrink-0 text-black/25 dark:text-white/25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 5v8a4 4 0 0 0 4 4h10m0 0-3-3m3 3-3 3" /></svg>
                                        @endif
                                        <img src="{{ $category['image'] }}" alt="" class="size-11 shrink-0 rounded-xl bg-[#f3f5f2] object-cover dark:bg-zinc-800" loading="lazy">
                                        <div class="min-w-0"><p class="truncate font-extrabold">{{ $category['name'] }}</p><p class="mt-1 truncate text-[10px] text-black/35 dark:text-white/35">/catalog/{{ $category['slug'] }}</p></div>
                                    </div>
                                </td>
                                <td class="px-4 py-3.5 text-black/45 dark:text-white/45">{{ $category['parent'] }}</td>
                                <td class="px-4 py-3.5 text-center font-extrabold">{{ $category['products'] }}</td>
                                <td class="px-4 py-3.5 text-black/45 dark:text-white/45">{{ $category['placement'] }}</td>
                                <td class="px-4 py-3.5">
                                    <span @class([
                                        'inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[10px] font-bold',
                                        'bg-emerald-50 text-emerald-700 dark:bg-emerald-400/10 dark:text-emerald-300' => $category['active'],
                                        'bg-zinc-100 text-zinc-500 dark:bg-white/8 dark:text-white/45' => ! $category['active'],
                                    ])><span @class(['size-1.5 rounded-full', 'bg-emerald-500' => $category['active'], 'bg-zinc-400' => ! $category['active']])></span>{{ $category['active'] ? 'Активна' : 'Скрыта' }}</span>
                                </td>
                                <td class="px-5 py-3.5">
                                    <div class="flex justify-end gap-2">
                                        <button type="button" class="inline-flex h-9 items-center gap-1.5 rounded-full px-3 text-[11px] font-bold ring-1 ring-black/10 transition hover:bg-[#17211c] hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] dark:ring-white/10 dark:hover:bg-white dark:hover:text-[#17211c] dark:focus-visible:outline-white"><svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m14 4 6 6L8 22H2v-6L14 4Zm-3 3 6 6" /></svg>Редактировать</button>
                                        <button type="button" class="inline-flex h-9 items-center gap-1.5 rounded-full px-3 text-[11px] font-bold text-rose-600 ring-1 ring-rose-200 transition hover:bg-rose-600 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-600 dark:text-rose-400 dark:ring-rose-400/20"><svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M9 7V4h6v3m3 0-1 14H7L6 7m4 4v6m4-6v6" /></svg>Удалить</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="divide-y divide-black/6 md:hidden dark:divide-white/8">
                @foreach ($categories as $category)
                    <article class="p-4">
                        <div class="flex items-start gap-3">
                            <img src="{{ $category['image'] }}" alt="" class="size-12 shrink-0 rounded-xl bg-[#f3f5f2] object-cover dark:bg-zinc-800" loading="lazy">
                            <div class="min-w-0 flex-1"><div class="flex flex-wrap items-center gap-2"><h2 class="truncate text-sm font-extrabold">{{ $category['name'] }}</h2><span @class(['size-2 rounded-full', 'bg-emerald-500' => $category['active'], 'bg-zinc-400' => ! $category['active']]) aria-label="{{ $category['active'] ? 'Активна' : 'Скрыта' }}"></span></div><p class="mt-1 truncate text-[10px] text-black/35 dark:text-white/35">/catalog/{{ $category['slug'] }}</p></div>
                            <span class="rounded-full bg-black/5 px-2 py-1 text-[10px] font-bold dark:bg-white/8">{{ $category['products'] }} товаров</span>
                        </div>
                        <dl class="mt-4 grid grid-cols-2 gap-3 rounded-2xl bg-[#f7f8f5] p-3 text-[10px] dark:bg-zinc-800/70">
                            <div><dt class="text-black/35 dark:text-white/35">Родительская</dt><dd class="mt-1 font-bold">{{ $category['parent'] }}</dd></div>
                            <div><dt class="text-black/35 dark:text-white/35">Отображение</dt><dd class="mt-1 font-bold">{{ $category['placement'] }}</dd></div>
                        </dl>
                        <div class="mt-3 grid grid-cols-2 gap-2">
                            <button type="button" class="inline-flex h-10 items-center justify-center gap-1.5 rounded-full text-[11px] font-bold ring-1 ring-black/10 dark:ring-white/10"><svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m14 4 6 6L8 22H2v-6L14 4Zm-3 3 6 6" /></svg>Редактировать</button>
                            <button type="button" class="inline-flex h-10 items-center justify-center gap-1.5 rounded-full text-[11px] font-bold text-rose-600 ring-1 ring-rose-200 dark:text-rose-400 dark:ring-rose-400/20"><svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M9 7V4h6v3m3 0-1 14H7L6 7m4 4v6m4-6v6" /></svg>Удалить</button>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="flex flex-col gap-3 border-t border-black/6 px-4 py-4 text-xs sm:flex-row sm:items-center sm:justify-between sm:px-5 dark:border-white/8">
                <p class="text-black/40 dark:text-white/40">Показано 1–{{ count($categories) }} из {{ count($categories) }}</p>
                <nav class="flex items-center gap-1" aria-label="Страницы категорий">
                    <button type="button" class="grid size-8 place-items-center rounded-full text-black/25 ring-1 ring-black/8 dark:text-white/25 dark:ring-white/10" disabled aria-label="Предыдущая страница"><svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6" /></svg></button>
                    <button type="button" class="grid size-8 place-items-center rounded-full bg-[#17211c] text-[10px] font-bold text-white dark:bg-lime-300 dark:text-[#17211c]" aria-current="page">1</button>
                    <button type="button" class="grid size-8 place-items-center rounded-full text-black/25 ring-1 ring-black/8 dark:text-white/25 dark:ring-white/10" disabled aria-label="Следующая страница"><svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg></button>
                </nav>
            </div>
        </div>
    </section>
</x-admin.layout>
