@php
    $paths = [
        [
            'title' => 'مرحلة الترويج والإعلان',
            'date' => '',
            'month' => 'يناير - فبراير​',
            'inverted' => true,
        ],
        [
            'title' => 'مرحلة تقييم المشاريع​',
            'date' => '',
            'month' => 'مارس',
            'inverted' => false,
        ],
        [
            'title' => 'مرحلة ما قبل الاحتضـــــان',
            'date' => '',
            'month' => 'إبريل - يوليو​',
            'inverted' => false,
        ],
        [
            'title' => 'مرحلة الاحتضان​',
            'date' => '',
            'month' => 'أغسطس - نوفمبر​',
            'inverted' => true,
        ],
        [
            'title' => 'الحفل الختامي​',
            'date' => '',
            'month' => 'ديسمبر​',
            'inverted' => false,
        ],
    ];
@endphp

<section
    class="relative flex items-center overflow-hidden bg-[#0C344A]"
    id="timeline-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 size-full relative z-10 px-4 py-12">
        <div class="lg:gap-12 flex flex-col gap-8">
            <h2
                class="lg:text-[48px] md:text-[32px] text-[28px] text-center font-medium text-white"
                :class="{
                    'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                    'invisible': !shown,
                }"
            >
                رحلة المشروع​
            </h2>

            <div class="container mx-auto md:p-8 p-4 bg-[#0E4D70] rounded-[28px] overflow-hidden">

                <div class="flex flex-col">
                    @foreach ($paths as $index => $path)
                        <div class="flex items-center justify-center gap-4">

                            @if ($loop->odd)
                                <div class="md:w-1/2 md:flex-grow w-52 flex justify-end gap-2">
                                    <div class="flex flex-col">
                                        <h3
                                            class="xl:text-4xl md:text-2xl sm:text-lg text-base font-medium text-white"
                                            :class="{
                                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->index * 1000 + 600 }}ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            {!! $path['title'] !!}
                                        </h3>

                                        <span
                                            class="font-bold text-[#0F83C3] text-[12px] sm:text-[14px] md:text-[18px] lg:text-[26px]"
                                            :class="{
                                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->index * 1000 + 700 }}ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            {{ $path['month'] }}
                                        </span>
                                    </div>
                                </div>
                            @else
                                <div class="md:flex flex-col flex-grow hidden w-1/2 gap-2"></div>
                            @endif

                            <div
                                class="xl:w-40 lg:w-36 md:w-24 sm:w-24 xl:py-12 lg:py-10 md:py-8 sm:py-6 relative flex items-center justify-center flex-shrink-0 w-20 py-4">
                                <div
                                    class="size-[60px] rounded-full bg-white flex items-center justify-center z-10"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->index * 1000 + 300 }}ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    <span class="font-bold text-xl text-[#0C344A]">
                                        {{ str($loop->iteration)->padLeft(2, 0) }}
                                    </span>
                                </div>

                                @if (!$loop->last)
                                    <span
                                        class="absolute border-e-2 border-dashed border-[#8D8D8D] xl:h-32 lg:h-28 md:h-24 sm:h-8 h-4 top-20"
                                        :class="{
                                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->index * 1000 + 800 }}ms]': shown,
                                            'invisible': !shown,
                                        }"
                                    ></span>
                                    <span
                                        @class([
                                            'md:hidden block absolute border-b-2 border-dashed border-[#8D8D8D] sm:top-28 top-24 w-56',
                                            'start-0 sm:-ms-44 -ms-[11.5rem]' => $loop->odd,
                                            'end-0 sm:-me-44 -me-[11.5rem]' => $loop->even,
                                        ])
                                        :class="{
                                            'motion-preset-fade {{ $loop->odd ? '-motion-translate-x-in-[40px]' : 'motion-translate-x-in-[40px]' }} motion-delay-[{{ $loop->index * 1000 + 900 }}ms]': shown,
                                            'invisible': !shown,
                                        }"
                                    ></span>
                                    <span
                                        @class([
                                            'md:hidden block absolute border-e-2 border-dashed border-[#8D8D8D] lg:h-36 md:h-24 h-8 sm:top-28 top-24',
                                            'start-0 sm:-ms-44 -ms-[11.5rem]' => $loop->odd,
                                            'end-0 sm:-me-44 -me-[11.5rem]' => $loop->even,
                                        ])
                                        :class="{
                                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->index * 1000 + 1000 }}ms]': shown,
                                            'invisible': !shown,
                                        }"
                                    ></span>
                                @endif

                            </div>
                            @if ($loop->odd)
                                <div class="md:flex flex-col flex-grow hidden w-1/2 gap-2"></div>
                            @else
                                <div class="md:w-1/2 md:flex-grow w-52 flex justify-start gap-2">
                                    <div class="flex flex-col">
                                        <h3
                                            class="xl:text-4xl md:text-2xl sm:text-lg text-base font-medium text-white"
                                            :class="{
                                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->index * 1000 + 600 }}ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            {!! $path['title'] !!}
                                        </h3>

                                        <span
                                            class="font-bold text-[#0F83C3] text-[12px] sm:text-[14px] md:text-[18px] lg:text-[26px]"
                                            :class="{
                                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->index * 1000 + 700 }}ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            {{ $path['month'] }}
                                        </span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
