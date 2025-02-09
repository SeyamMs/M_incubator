@php
    $paths = [
        [
            'title' => 'ورش عمل تطويرية​',
            'image' => 'images/offerings-1.jpg',
            'description' =>
                'برامج ورش عمل تدريبية لتمكين قدرات رواد الأعمال من الأدوات الرئيسية لتحويل أفكارهم إلى شركات​',
            'col_class' => '',
            'wrapper_class' => '',
            'link' => '#',
        ],
        [
            'title' => 'جلسات التوجيه والإرشاد​',
            'image' => 'images/offerings-2.jpg',
            'description' => 'جلسات أسبوعية لتوجيه وإرشاد رواد الأعمال من أجل تأسيس شركاتهم الاجتماعية في قطاع الطاقة​',
            'col_class' => '',
            'wrapper_class' => '',
            'link' => '#',
        ],
        [
            'title' => '',
            'image' => 'images/offerings-3.jpg',
            'description' => 'جلسات أسبوعية لتوجيه وإرشاد رواد الأعمال من أجل تأسيس شركاتهم الاجتماعية في قطاع الطاقة​',
            'col_class' => '',
            'wrapper_class' => '',
            'link' => '#',
        ],
        [
            'title' => 'بيئة ريادية محفزة​',
            'image' => 'images/offerings-4.jpg',
            'description' => 'بيئة محفزة تضم مجموعة من الخبراء ورواد الأعمال المميزين في قطاع الطاقة​',
            'col_class' => '',
            'wrapper_class' => '',
            'link' => '#',
        ],
        [
            'title' => 'مساحات عمل​',
            'image' => 'images/offerings-5.jpg',
            'description' => 'توفير مكاتب مخصصة مع خدمات مكتبية وقاعات اجتماعات تقدم لرواد الأعمال',
            'col_class' => '',
            'wrapper_class' => '',
            'link' => '#',
        ],
        [
            'title' => 'الوصول إلى السوق​',
            'image' => 'images/offerings-6.jpg',
            'description' => 'المساهمة في إطلاق الخدمات والمنتجات للوصول إلى العملاء في السوق المستهدف​',
            'col_class' => '',
            'wrapper_class' => '',
            'link' => '#',
        ],
    ];
@endphp

<section
    class="relative flex items-center bg-[#0E4D70]"
    id="offerings-section"
    x-data="{ shown: false }"
    x-intersect.threshold.10="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 size-full relative z-10 px-4 py-12">
        <div class="container mx-auto">
            <div class="md:gap-14 flex flex-col gap-8">

                <h2
                    class="lg:text-[48px] md:text-[32px] text-[28px] text-center font-medium text-white"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    ماذا تقدم الحاضنة
                </h2>

                <div class="grid grid-cols-6 gap-6">

                    @foreach ($paths as $index => $path)
                        <div class="lg:col-span-2 md:col-span-3 col-span-6 {{ $path['col_class'] }}">
                            <div
                                class="group bg-[#0C344A] hover:bg-[#091f2b] transition-all duration-300 rounded-xl flex md:flex-col flex-row h-full overflow-hidden {{ $path['wrapper_class'] }}"
                                :class="{
                                    'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 300 }}ms]': shown,
                                    'invisible': !shown,
                                }"
                            >

                                <div
                                    class="md:w-full flex md:aspect-[438/272] aspect-square w-48 overflow-hidden mx-auto flex-shrink-0"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 700 }}ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    <img
                                        class="size-full group-hover:scale-110 group-hover:rotate-3 object-cover object-center transition-all duration-300"
                                        src="{{ $page->asset($path['image']) }}"
                                        alt="{{ str($path['image'])->before('.')->after('/') }}"
                                    />
                                </div>

                                <div class="md:px-5 md:py-6 flex flex-col gap-2 p-4">
                                    @if ($path['title'])
                                        <h3
                                            class="text-white lg:text-[24px] md:text-[20px] text-[18px] leading-[32px] font-semibold text-start"
                                            :class="{
                                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 500 }}ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            {{ $path['title'] }}
                                        </h3>
                                    @endif
                                    <p
                                        class="lg:text-lg md:text-base text-sm font-normal text-white"
                                        :class="{
                                            'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 1000 }}ms]': shown,
                                            'invisible': !shown,
                                        }"
                                    >
                                        {{ $path['description'] }}
                                    </p>


                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="absolute inset-0 z-0">
        <div class="sticky top-0 h-screen">
            <img
                class="size-full object-cover object-center"
                src="{{ $page->asset('images/paths-section-bg-pattern.png') }}"
                alt="paths-section-bg-pattern"
            />
        </div>
    </div>
</section>
