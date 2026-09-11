@props([
    'title',
    'description' => null,
    'eyebrow' => 'Каталог',
    'backUrl',
    'backLabel' => 'Назад',
    'action' => null,
    'method' => 'POST',
    'enctype' => 'multipart/form-data',
    'submitLabel' => 'Сохранить',
    'draftLabel' => 'Сохранить черновик',
    'showDraft' => true,
])

@php
    $normalizedMethod = strtoupper($method);
@endphp

<section {{ $attributes->class(['pb-24 sm:pb-0']) }}>
    <nav class="flex flex-wrap items-center gap-2 text-xs text-black/35 dark:text-white/35" aria-label="Хлебные крошки">
        <a href="{{ route('admin') }}" class="transition hover:text-[#17211c] dark:hover:text-white">Обзор</a>
        <svg class="size-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg>
        <span>{{ $eyebrow }}</span>
        <svg class="size-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" /></svg>
        <span class="font-semibold text-[#17211c] dark:text-white">{{ $title }}</span>
    </nav>

    <div class="mt-5 flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
        <div class="max-w-2xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-emerald-700 dark:text-lime-300">{{ $eyebrow }}</p>
            <h1 class="mt-2 text-3xl font-black tracking-[-0.055em] sm:text-4xl">{{ $title }}</h1>
            @if ($description)
                <p class="mt-2 text-sm leading-6 text-black/45 dark:text-white/45">{{ $description }}</p>
            @endif
        </div>
        <a href="{{ $backUrl }}" class="inline-flex h-11 w-fit items-center justify-center gap-2 rounded-full bg-white px-4 text-xs font-bold ring-1 ring-black/8 transition hover:bg-[#17211c] hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] dark:bg-zinc-900 dark:ring-white/10 dark:hover:bg-white dark:hover:text-[#17211c] dark:focus-visible:outline-white">
            <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6" /></svg>
            {{ $backLabel }}
        </a>
    </div>

    <form
        @if ($action) action="{{ $action }}" @endif
        method="{{ $normalizedMethod === 'GET' ? 'GET' : 'POST' }}"
        enctype="{{ $enctype }}"
        class="mt-7"
    >
        @if ($action && $normalizedMethod !== 'GET')
            @csrf
        @endif

        @if ($action && ! in_array($normalizedMethod, ['GET', 'POST'], true))
            @method($normalizedMethod)
        @endif

        <div @class([
            'grid gap-4',
            'xl:grid-cols-[minmax(0,1fr)_20rem]' => isset($aside),
        ])>
            <div class="grid min-w-0 content-start gap-4">
                {{ $slot }}
            </div>

            @isset($aside)
                <aside class="grid content-start gap-4">
                    {{ $aside }}
                </aside>
            @endisset
        </div>

        <div class="fixed inset-x-0 bottom-0 z-20 border-t border-black/8 bg-white/95 p-3 backdrop-blur-xl sm:sticky sm:inset-x-auto sm:bottom-4 sm:mt-6 sm:rounded-2xl sm:border sm:px-4 sm:shadow-xl sm:shadow-black/5 dark:border-white/10 dark:bg-zinc-900/95">
            <div class="mx-auto flex max-w-[1536px] items-center justify-between gap-3">
                <p class="hidden text-xs text-black/40 sm:block dark:text-white/40">Поля со звёздочкой обязательны</p>
                <div class="ml-auto flex w-full gap-2 sm:w-auto">
                    <a href="{{ $backUrl }}" class="inline-flex h-11 flex-1 items-center justify-center rounded-full px-4 text-xs font-bold ring-1 ring-black/10 transition hover:bg-black/5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] sm:flex-none dark:ring-white/10 dark:hover:bg-white/8 dark:focus-visible:outline-white">Отмена</a>
                    @if ($showDraft)
                        <button type="button" class="hidden h-11 items-center justify-center rounded-full bg-white px-4 text-xs font-bold ring-1 ring-black/10 transition hover:bg-black/5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] sm:inline-flex dark:bg-zinc-900 dark:ring-white/10 dark:hover:bg-white/8 dark:focus-visible:outline-white">{{ $draftLabel }}</button>
                    @endif
                    <button type="{{ $action ? 'submit' : 'button' }}" class="inline-flex h-11 flex-1 items-center justify-center gap-2 rounded-full bg-[#17211c] px-5 text-xs font-bold text-white transition hover:bg-emerald-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#17211c] sm:flex-none dark:bg-lime-300 dark:text-[#17211c] dark:hover:bg-white dark:focus-visible:outline-white">
                        <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12.5 9.5 17 19 7" /></svg>
                        {{ $submitLabel }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</section>
