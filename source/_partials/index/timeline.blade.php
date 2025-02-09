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
            'title' => 'مرحلة ما قبل الاحتضـــــان ​',
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
    class="relative flex items-center overflow-hidden bg-white"
    id="timeline-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:pt-20 md:pt-16 lg:pb-32 md:pb-28 size-full relative z-10 px-4 pt-12 pb-16">
        <div class="container mx-auto">

            <div class="md:gap-14 flex flex-col gap-8">

                <h2
                    class="lg:text-[48px] md:text-[32px] text-[28px] text-center font-medium text-[#1A1A1A]"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    رحلة المشروع​
                </h2>


                <div class="grid grid-cols-8 gap-6">

                    @foreach ($paths as $index => $path)
                        <div class="md:col-span-5 col-span-8 {{ $loop->even ? 'md:col-end-9' : '' }}">
                            <div
                                class="{{ $path['inverted'] ? 'bg-[#0E4D70]' : 'bg-[#ECECECCC]' }} rounded-3xl flex items-center overflow-hidden md:p-6 p-4 md:gap-6 gap-4"
                                :class="{
                                    'motion-preset-fade {{ $loop->even ? '-motion-translate-x-in-[40px]' : 'motion-translate-x-in-[40px]' }} motion-delay-[{{ $loop->iteration * 300 + 300 }}ms]': shown,
                                    'invisible': !shown,
                                }"
                            >

                                <div
                                    class="h-[65px] w-[105px] rounded-xl flex flex-col items-center justify-center {{ $path['inverted'] ? 'bg-white' : 'bg-[#0E4D70]' }}"
                                    {{-- class="h-[65px] w-[105px] rounded-xl flex flex-col items-center justify-center {{ $path['inverted'] ? 'bg-white' : 'bg-[#0E4D70]' }}" --}}
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 500 }}ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    {{-- <span
                                        class="font-bold leading-6 text-[27px] {{ $path['inverted'] ? 'text-[#0E4D70]' : 'text-white' }}"
                                    >
                                        {{ $path['date'] }}
                                    </span> --}}
                                    <span
                                        class="text-[12.8px] font-bold {{ $path['inverted'] ? 'text-[#0E4D70]' : 'text-white' }}"
                                        {{-- class="font-bold text-[27px] {{ $path['inverted'] ? 'text-[#0E4D70]' : 'text-white' }}" --}}
                                    >
                                        {{ $path['month'] }}
                                    </span>
                                </div>

                                <h3
                                    class="{{ $path['inverted'] ? 'text-white' : 'text-[#1B1B1B]' }} xl:text-[34px] md:text-[24px] sm:text-[20px] text-[16px] md:leading-[50px] leading-[30px] font-semibold md:text-center text-start"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 600 }}ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    {!! $path['title'] !!}
                                </h3>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
