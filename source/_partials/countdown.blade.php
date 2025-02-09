<section
    class="relative flex items-center overflow-hidden bg-white"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 size-full px-4 py-12">
        <div
            class="container mx-auto md:py-12 py-8 md:px-8 px-4 bg-[#0E4D70] rounded-[34px] overflow-hidden"
            :class="{
                'motion-preset-focus motion-delay-[300ms]': shown,
                'invisible': !shown,
            }"
        >

            <div class="md:gap-10 flex flex-col items-center justify-center h-full gap-6">

                <h2
                    class="lg:text-[48px] md:text-[32px] text-[28px] text-center font-medium text-white"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[600ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    العد التنازلي
                </h2>

                <div
                    class="md:gap-8 flex flex-col max-w-screen-xl gap-4 mx-auto"
                    x-data="countdown(Date.parse('2 Feb 2025 23:59:59 +3'))"
                >
                    <div class="">
                        <template x-if="remaining < 0">
                            <div class="xl:gap-14 lg:gap-8 md:gap-6 sm:gap-4 flex gap-0">
                                <div
                                    class="bg-[#F4F4F4] xl:gap-4 md:rounded-3xl rounded-none flex items-center justify-center lg:gap-3 md:gap-2 gap-1 xl:px-8 lg:px-6 md:px-4 px-2 xl:py-5 lg:py-4 md:py-3 py-2 shadow"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[900ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    <h2
                                        class="text-[#1B1B1B] xl:text-6xl lg:text-5xl md:text-3xl sm:text-xl text-sm font-extrabold text-center">
                                        انتهى الوقت بدأ التحدي
                                    </h2>

                                </div>
                            </div>
                        </template>
                        <template x-if="remaining >= 0">
                            <div class="xl:gap-8 lg:gap-6 md:gap-4 flex gap-0">
                                <div
                                    class="bg-[#F4F4F4] xl:gap-4 md:rounded-3xl rounded-none flex items-center justify-center lg:gap-3 md:gap-2 gap-1 xl:px-8 lg:px-6 md:px-4 px-2 xl:py-5 lg:py-4 md:py-3 py-2 shadow"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1500ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    <h2
                                        class="text-[#1B1B1B] xl:text-6xl lg:text-5xl md:text-3xl sm:text-xl text-sm font-extrabold text-center"
                                        x-text="time().seconds"
                                    ></h2>
                                    <h3
                                        class="xl:text-5xl lg:text-4xl md:text-2xl sm:text-lg text-xs font-medium text-[#1B1B1B]">
                                        ثانية
                                    </h3>
                                </div>

                                <div
                                    class="bg-[#F4F4F4] xl:gap-4 md:rounded-3xl rounded-none flex items-center justify-center lg:gap-3 md:gap-2 gap-1 xl:px-8 lg:px-6 md:px-4 px-2 xl:py-5 lg:py-4 md:py-3 py-2 shadow"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1300ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    <h2
                                        class="text-[#1B1B1B] xl:text-6xl lg:text-5xl md:text-3xl sm:text-xl text-sm font-extrabold text-center"
                                        x-text="time().minutes"
                                    ></h2>
                                    <h3
                                        class="xl:text-5xl lg:text-4xl md:text-2xl sm:text-lg text-xs font-medium text-[#1B1B1B]">
                                        دقيقة
                                    </h3>
                                </div>

                                <div
                                    class="bg-[#F4F4F4] xl:gap-4 md:rounded-3xl rounded-none flex items-center justify-center lg:gap-3 md:gap-2 gap-1 xl:px-8 lg:px-6 md:px-4 px-2 xl:py-5 lg:py-4 md:py-3 py-2 shadow"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1100ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    <h2
                                        class="text-[#1B1B1B] xl:text-6xl lg:text-5xl md:text-3xl sm:text-xl text-sm font-extrabold text-center"
                                        x-text="time().hours"
                                    ></h2>
                                    <h3
                                        class="xl:text-5xl lg:text-4xl md:text-2xl sm:text-lg text-xs font-medium text-[#1B1B1B]">
                                        ساعة
                                    </h3>
                                </div>

                                <div
                                    class="bg-[#F4F4F4] xl:gap-4 md:rounded-3xl rounded-none flex items-center justify-center lg:gap-3 md:gap-2 gap-1 xl:px-8 lg:px-6 md:px-4 px-2 xl:py-5 lg:py-4 md:py-3 py-2 shadow"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[900ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    <h2
                                        class="text-[#1B1B1B] xl:text-6xl lg:text-5xl md:text-3xl sm:text-xl text-sm font-extrabold text-center"
                                        x-text="time().days"
                                    ></h2>
                                    <h3
                                        class="xl:text-5xl lg:text-4xl md:text-2xl sm:text-lg text-xs font-medium text-[#1B1B1B]">
                                        يوم
                                    </h3>
                                </div>
                            </div>
                        </template>
                    </div>

                    <div class="flex items-center justify-center gap-3">
                        <div
                            class="xl:size-10 md:size-8 sm:size-6 size-4"
                            :class="{
                                'motion-preset-fade -motion-translate-y-in-[40px]': shown,
                                'motion-delay-[1800ms]': remaining >= 0,
                                'motion-delay-[1200ms]': remaining < 0,
                                'invisible': !shown,
                            }"
                        >
                            <img
                                src="{{ $page->asset('images/icons/location.svg') }}"
                                alt="location"
                            />
                        </div>
                        <h3
                            class="text-white font-bold xl:text-[32px] md:text-[28px] sm:text-[22px] text-[18px]"
                            :class="{
                                'motion-preset-fade -motion-translate-y-in-[40px]': shown,
                                'motion-delay-[2000ms]': remaining >= 0,
                                'motion-delay-[1400ms]': remaining < 0,
                                'invisible': !shown,
                            }"
                        >
                            مدينة مكة المكرمة
                        </h3>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
