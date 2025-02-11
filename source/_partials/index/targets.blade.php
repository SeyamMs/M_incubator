@php
    $paths = [
        [
            'title' => 'الباحثون والمبتكرون​',
            'image' => 'images/targets-1.jpg',
            'col_class' => 'md:col-span-2 sm:col-span-3 col-span-6',
            'wrapper_class' => '',
        ],
        [
            'title' => 'رواد الأعمال​',
            'image' => 'images/targets-2.jpg',
            'col_class' => 'md:col-span-2 sm:col-span-3 col-span-6',
            'wrapper_class' => '',
        ],
        [
            'title' => 'المهتمون بقطاع الطاقة​',
            'image' => 'images/targets-3.jpg',
            'col_class' => 'md:col-span-2 sm:col-span-3 col-span-6',
            'wrapper_class' => '',
        ],
    ];
@endphp

<section
    class="relative flex items-center overflow-hidden bg-white"
    id="targets-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 size-full relative z-10 px-4 py-12">
        <div class="container mx-auto">
            <div class="md:gap-14 flex flex-col gap-8">

                <h2
                    class="lg:text-[48px] md:text-[32px] text-[28px] text-center font-medium text-[#1A1A1A]"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    الفئات المستهدفة
                </h2>

                <div class="grid grid-cols-6 gap-8">

                    @foreach ($paths as $index => $path)
                        <div class="{{ $path['col_class'] }}">
                            <div
                                class="rounded-3xl size-full aspect-[425/466] relative flex items-end sm:max-w-none max-w-96 mx-auto justify-center overflow-hidden {{ $path['wrapper_class'] }}">

                                <div class="relatve xl:px-6 lg:px-3 md:px-4 md:py-8 sm:px-6 sm:py-10 z-10 px-4 py-8">
                                    <h3
                                        class="text-white lg:text-[36px] md:text-[18px] sm:text-[24px] text-[26px] font-medium text-center"
                                        :class="{
                                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 800 }}ms]': shown,
                                            'invisible': !shown,
                                        }"
                                    >
                                        {!! $path['title'] !!}
                                    </h3>
                                </div>

                                <div
                                    class="rounded-3xl size-full absolute z-0 flex overflow-hidden"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 600 }}ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    <img
                                        class="size-full object-cover object-center"
                                        src="{{ $page->asset($path['image']) }}"
                                        alt="{{ str($path['image'])->before('.')->after('/') }}"
                                    />
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
