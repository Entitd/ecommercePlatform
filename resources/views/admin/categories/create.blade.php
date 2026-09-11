<x-admin.layout title="Новая категория">
    <x-admin.resource-form
        title="Новая категория"
        description="Создайте раздел каталога, настройте его отображение на витрине и подготовьте метаданные для поиска."
        eyebrow="Каталог · Категории"
        :back-url="route('admin.categories.index')"
        back-label="К категориям"
        submit-label="Создать категорию"
    >
        <section class="rounded-3xl bg-white shadow-sm ring-1 ring-black/5 dark:bg-zinc-900 dark:ring-white/10">
            <div class="border-b border-black/6 px-5 py-5 sm:px-6 dark:border-white/8">
                <h2 class="text-base font-extrabold">Основная информация</h2>
                <p class="mt-1 text-xs leading-5 text-black/40 dark:text-white/40">Название и описание будут видны покупателям в каталоге.</p>
            </div>

            <div class="grid gap-6 p-5 sm:p-6">
                <div>
                    <label for="category-name" class="text-xs font-bold">Название категории <span class="text-[#e75638]">*</span></label>
                    <input id="category-name" name="name" type="text" placeholder="Например, Верхняя одежда" class="mt-2 h-12 w-full rounded-xl border-0 bg-[#f5f6f3] px-4 text-sm outline-none ring-1 ring-black/8 transition placeholder:text-black/30 focus:bg-white focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-800 dark:ring-white/10 dark:placeholder:text-white/30 dark:focus:bg-zinc-950 dark:focus:ring-lime-300">
                    <p class="mt-2 text-[11px] leading-5 text-black/35 dark:text-white/35">Используйте короткое и понятное название — до 60 символов.</p>
                </div>

                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="category-slug" class="text-xs font-bold">Адрес страницы <span class="text-[#e75638]">*</span></label>
                        <div class="mt-2 flex h-12 overflow-hidden rounded-xl bg-[#f5f6f3] ring-1 ring-black/8 transition focus-within:bg-white focus-within:ring-2 focus-within:ring-emerald-700 dark:bg-zinc-800 dark:ring-white/10 dark:focus-within:bg-zinc-950 dark:focus-within:ring-lime-300">
                            <span class="flex shrink-0 items-center border-r border-black/6 px-3 text-xs text-black/35 dark:border-white/8 dark:text-white/35">/catalog/</span>
                            <input id="category-slug" name="slug" type="text" placeholder="verhnyaya-odezhda" class="min-w-0 flex-1 border-0 bg-transparent px-3 text-sm outline-none placeholder:text-black/30 dark:placeholder:text-white/30">
                        </div>
                    </div>

                    <div>
                        <label for="parent-category" class="text-xs font-bold">Родительская категория</label>
                        <div class="relative mt-2">
                            <select id="parent-category" name="parent_id" class="h-12 w-full appearance-none rounded-xl border-0 bg-[#f5f6f3] px-4 pr-10 text-sm outline-none ring-1 ring-black/8 transition focus:bg-white focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-800 dark:ring-white/10 dark:focus:bg-zinc-950 dark:focus:ring-lime-300">
                                <option value="">Без родительской категории</option>
                                <option value="clothes">Одежда</option>
                                <option value="shoes">Обувь</option>
                                <option value="accessories">Аксессуары</option>
                                <option value="home">Для дома</option>
                            </select>
                            <svg class="pointer-events-none absolute right-4 top-1/2 size-4 -translate-y-1/2 text-black/40 dark:text-white/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" /></svg>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between gap-4"><label for="category-description" class="text-xs font-bold">Описание</label><span class="text-[10px] text-black/30 dark:text-white/30">0 / 500</span></div>
                    <div class="mt-2 overflow-hidden rounded-xl bg-[#f5f6f3] ring-1 ring-black/8 transition focus-within:bg-white focus-within:ring-2 focus-within:ring-emerald-700 dark:bg-zinc-800 dark:ring-white/10 dark:focus-within:bg-zinc-950 dark:focus-within:ring-lime-300">
                        <div class="flex items-center gap-1 border-b border-black/6 px-2 py-2 dark:border-white/8" aria-label="Форматирование описания">
                            <button type="button" class="grid size-8 place-items-center rounded-lg text-xs font-black transition hover:bg-black/5 dark:hover:bg-white/8" aria-label="Полужирный текст">B</button>
                            <button type="button" class="grid size-8 place-items-center rounded-lg text-xs italic transition hover:bg-black/5 dark:hover:bg-white/8" aria-label="Курсив">I</button>
                            <span class="mx-1 h-4 w-px bg-black/10 dark:bg-white/10"></span>
                            <button type="button" class="grid size-8 place-items-center rounded-lg transition hover:bg-black/5 dark:hover:bg-white/8" aria-label="Маркированный список"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" d="M9 6h11M9 12h11M9 18h11" /><circle cx="4" cy="6" r="1" fill="currentColor" stroke="none" /><circle cx="4" cy="12" r="1" fill="currentColor" stroke="none" /><circle cx="4" cy="18" r="1" fill="currentColor" stroke="none" /></svg></button>
                            <button type="button" class="grid size-8 place-items-center rounded-lg transition hover:bg-black/5 dark:hover:bg-white/8" aria-label="Добавить ссылку"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M10 13a5 5 0 0 0 7.1.1l2-2a5 5 0 0 0-7.1-7.1l-1.1 1.1M14 11a5 5 0 0 0-7.1-.1l-2 2A5 5 0 0 0 12 20l1.1-1.1" /></svg></button>
                        </div>
                        <textarea id="category-description" name="description" rows="6" placeholder="Расскажите, какие товары находятся в этой категории…" class="block w-full resize-y border-0 bg-transparent px-4 py-3 text-sm leading-6 outline-none placeholder:text-black/30 dark:placeholder:text-white/30"></textarea>
                    </div>
                </div>
            </div>
        </section>

        <section class="rounded-3xl bg-white shadow-sm ring-1 ring-black/5 dark:bg-zinc-900 dark:ring-white/10">
            <div class="border-b border-black/6 px-5 py-5 sm:px-6 dark:border-white/8">
                <h2 class="text-base font-extrabold">Изображение категории</h2>
                <p class="mt-1 text-xs leading-5 text-black/40 dark:text-white/40">Используется на главной странице и в списке категорий.</p>
            </div>
            <div class="p-5 sm:p-6">
                <label for="category-image" class="group flex min-h-56 cursor-pointer flex-col items-center justify-center rounded-2xl border border-dashed border-black/15 bg-[#fafbf9] px-6 py-8 text-center transition hover:border-emerald-700 hover:bg-emerald-50/40 focus-within:border-emerald-700 dark:border-white/15 dark:bg-zinc-950/40 dark:hover:border-lime-300 dark:hover:bg-lime-300/5">
                    <span class="grid size-12 place-items-center rounded-full bg-white text-emerald-700 shadow-sm ring-1 ring-black/5 transition group-hover:scale-105 dark:bg-zinc-800 dark:text-lime-300 dark:ring-white/10"><svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16.5V19a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2.5M12 3v12m0-12 4 4m-4-4L8 7" /></svg></span>
                    <span class="mt-4 text-sm font-extrabold">Перетащите изображение или выберите файл</span>
                    <span class="mt-2 text-xs leading-5 text-black/35 dark:text-white/35">PNG, JPG или WebP · до 5 МБ · желательно 1200 × 800 px</span>
                    <span class="mt-4 inline-flex h-9 items-center rounded-full bg-white px-4 text-xs font-bold ring-1 ring-black/10 dark:bg-zinc-800 dark:ring-white/10">Выбрать файл</span>
                    <input id="category-image" name="image" type="file" accept="image/png,image/jpeg,image/webp" class="sr-only">
                </label>
            </div>
        </section>

        <section class="rounded-3xl bg-white shadow-sm ring-1 ring-black/5 dark:bg-zinc-900 dark:ring-white/10">
            <div class="border-b border-black/6 px-5 py-5 sm:px-6 dark:border-white/8">
                <h2 class="text-base font-extrabold">Поисковая оптимизация</h2>
                <p class="mt-1 text-xs leading-5 text-black/40 dark:text-white/40">Настройте отображение страницы в результатах поиска.</p>
            </div>
            <div class="grid gap-6 p-5 sm:p-6">
                <div>
                    <div class="flex items-center justify-between gap-4"><label for="meta-title" class="text-xs font-bold">SEO-заголовок</label><span class="text-[10px] text-black/30 dark:text-white/30">0 / 60</span></div>
                    <input id="meta-title" name="meta_title" type="text" placeholder="Название категории — купить в SFERA" class="mt-2 h-12 w-full rounded-xl border-0 bg-[#f5f6f3] px-4 text-sm outline-none ring-1 ring-black/8 transition placeholder:text-black/30 focus:bg-white focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-800 dark:ring-white/10 dark:placeholder:text-white/30 dark:focus:bg-zinc-950 dark:focus:ring-lime-300">
                </div>
                <div>
                    <div class="flex items-center justify-between gap-4"><label for="meta-description" class="text-xs font-bold">Meta description</label><span class="text-[10px] text-black/30 dark:text-white/30">0 / 160</span></div>
                    <textarea id="meta-description" name="meta_description" rows="3" placeholder="Кратко опишите категорию для поисковой выдачи…" class="mt-2 block w-full resize-y rounded-xl border-0 bg-[#f5f6f3] px-4 py-3 text-sm leading-6 outline-none ring-1 ring-black/8 transition placeholder:text-black/30 focus:bg-white focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-800 dark:ring-white/10 dark:placeholder:text-white/30 dark:focus:bg-zinc-950 dark:focus:ring-lime-300"></textarea>
                </div>
                <div class="rounded-2xl border border-black/8 p-4 dark:border-white/10">
                    <p class="text-[10px] font-bold uppercase tracking-[0.14em] text-black/30 dark:text-white/30">Предпросмотр</p>
                    <p class="mt-3 text-base font-semibold text-blue-700 dark:text-blue-400">Название категории — купить в SFERA</p>
                    <p class="mt-1 text-xs text-emerald-700 dark:text-emerald-400">sfera.ru/catalog/category-name</p>
                    <p class="mt-2 text-xs leading-5 text-black/50 dark:text-white/50">Описание категории появится здесь после заполнения метаданных.</p>
                </div>
            </div>
        </section>

        <x-slot:aside>
            <section class="rounded-3xl bg-white p-5 shadow-sm ring-1 ring-black/5 sm:p-6 dark:bg-zinc-900 dark:ring-white/10">
                <div class="flex items-center justify-between gap-4">
                    <div><h2 class="text-sm font-extrabold">Статус</h2><p class="mt-1 text-[11px] text-black/35 dark:text-white/35">Доступность на витрине</p></div>
                    <label class="relative inline-flex cursor-pointer items-center">
                        <input type="checkbox" name="is_active" value="1" class="peer sr-only" checked>
                        <span class="h-7 w-12 rounded-full bg-black/10 transition peer-checked:bg-emerald-700 peer-focus-visible:ring-2 peer-focus-visible:ring-emerald-700 peer-focus-visible:ring-offset-2 after:absolute after:left-1 after:top-1 after:size-5 after:rounded-full after:bg-white after:shadow-sm after:transition-transform peer-checked:after:translate-x-5 dark:bg-white/15 dark:peer-checked:bg-lime-300 dark:peer-focus-visible:ring-lime-300 dark:peer-focus-visible:ring-offset-zinc-900"></span>
                        <span class="sr-only">Категория активна</span>
                    </label>
                </div>
                <div class="mt-5 border-t border-black/6 pt-5 dark:border-white/8">
                    <label for="visibility" class="text-xs font-bold">Видимость</label>
                    <div class="relative mt-2">
                        <select id="visibility" name="visibility" class="h-11 w-full appearance-none rounded-xl border-0 bg-[#f5f6f3] px-3 pr-9 text-xs outline-none ring-1 ring-black/8 focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-800 dark:ring-white/10 dark:focus:ring-lime-300"><option value="catalog">В каталоге и меню</option><option value="catalog_only">Только в каталоге</option><option value="hidden">Скрыта</option></select>
                        <svg class="pointer-events-none absolute right-3 top-1/2 size-4 -translate-y-1/2 text-black/40 dark:text-white/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" /></svg>
                    </div>
                </div>
            </section>

            <section class="rounded-3xl bg-white p-5 shadow-sm ring-1 ring-black/5 sm:p-6 dark:bg-zinc-900 dark:ring-white/10">
                <h2 class="text-sm font-extrabold">Размещение</h2>
                <div class="mt-5 grid gap-5">
                    <div>
                        <label for="sort-order" class="text-xs font-bold">Порядок сортировки</label>
                        <input id="sort-order" name="sort_order" type="number" min="0" value="0" class="mt-2 h-11 w-full rounded-xl border-0 bg-[#f5f6f3] px-3 text-xs outline-none ring-1 ring-black/8 focus:ring-2 focus:ring-emerald-700 dark:bg-zinc-800 dark:ring-white/10 dark:focus:ring-lime-300">
                        <p class="mt-2 text-[10px] leading-4 text-black/35 dark:text-white/35">Меньшее число отображается выше.</p>
                    </div>
                    <label class="flex cursor-pointer items-start gap-3 border-t border-black/6 pt-5 dark:border-white/8">
                        <input type="checkbox" name="show_on_homepage" value="1" class="mt-0.5 size-4 rounded border-black/15 text-emerald-700 accent-emerald-700 focus:ring-emerald-700 dark:border-white/15 dark:accent-lime-300">
                        <span><span class="block text-xs font-bold">Показывать на главной</span><span class="mt-1 block text-[10px] leading-4 text-black/35 dark:text-white/35">Добавить категорию в популярные разделы.</span></span>
                    </label>
                    <label class="flex cursor-pointer items-start gap-3">
                        <input type="checkbox" name="show_in_navigation" value="1" class="mt-0.5 size-4 rounded border-black/15 text-emerald-700 accent-emerald-700 focus:ring-emerald-700 dark:border-white/15 dark:accent-lime-300" checked>
                        <span><span class="block text-xs font-bold">Показывать в меню</span><span class="mt-1 block text-[10px] leading-4 text-black/35 dark:text-white/35">Разместить ссылку в навигации магазина.</span></span>
                    </label>
                </div>
            </section>

            <section class="rounded-3xl bg-[#e1f399] p-5 text-[#17211c] shadow-sm sm:p-6">
                <span class="grid size-10 place-items-center rounded-full bg-[#17211c] text-lime-300"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9" /><path stroke-linecap="round" d="M12 11v5m0-8h.01" /></svg></span>
                <h2 class="mt-5 text-sm font-extrabold">Перед публикацией</h2>
                <p class="mt-2 text-xs leading-5 text-[#17211c]/60">Проверьте название, адрес и изображение. Категорию можно скрыть от покупателей в любое время.</p>
            </section>
        </x-slot:aside>
    </x-admin.resource-form>
</x-admin.layout>
