<section
    class="relative flex items-center overflow-hidden bg-white"
    id="goals-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 size-full px-4 py-12">
        <div class="container mx-auto">
            <div class="md:gap-16 grid grid-cols-6 gap-12">
                <div class="md:col-span-3 flex-grow col-span-6">
                    <div class="rounded-3xl relative size-full min-h-[400px] max-h-[700px] overflow-hidden">
                        <div
                            class="top-8 right-10 absolute z-10 h-[72px]"
                            :class="{
                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[1000ms]': shown,
                                'invisible': !shown,
                            }"
                        >
                            <img
                                class="object-contain object-center size-full"
                                src="{{ $page->asset('images/moe-logo.svg') }}"
                                alt="moe-logo"
                            />
                        </div>
                        <div
                            class="rounded-3xl relative size-full overflow-hidden"
                            :class="{
                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[600ms]': shown,
                                'invisible': !shown,
                            }"
                        >
                            <div class="absolute inset-0 z-10 bg-transparent"></div>
                            <video
                                class="absolute top-0 left-0 z-0 object-cover size-full"
                                poster="{{ $page->asset('videos/goals-section.jpg') }}"
                                autoplay
                                playsinline
                                muted
                                loop
                            >
                                <source
                                    src="{{ $page->asset('videos/goals-section.mp4') }}"
                                    type="video/mp4"
                                />
                            </video>

                        </div>
                    </div>
                </div>

                <div class="md:col-span-3 col-span-6">
                    <div class="relative z-30 flex flex-col gap-10">
                        <div class="flex flex-col gap-16">
                            <h2
                                class="lg:text-[48px] md:text-[32px] text-[28px] font-medium text-[#1A1A1A]"
                                :class="{
                                    'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                                    'invisible': !shown,
                                }"
                            >
                                أهداف الحاضنة​
                            </h2>

                            <div class="flex flex-col gap-16">
                                <div class="flex items-start max-w-[595px] gap-6">
                                    <div class="flex items-center justify-center">
                                        <h3
                                            class="font-medium text-4xl text-[#1A1A1A33]"
                                            :class="{
                                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[600ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            01
                                        </h3>
                                    </div>
                                    <div class="flex flex-col gap-5">
                                        <h3
                                            class="font-medium md:text-5xl text-3xl text-[#1A1A1A]"
                                            :class="{
                                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[700ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            تحفيز
                                        </h3>
                                        <h4
                                            class="font-normal md:text-2xl text-xl text-[#1A1A1A]"
                                            :class="{
                                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[800ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            تشجيع الريادة الاجتماعية
                                            <br />
                                            في قطاع الطاقة
                                        </h4>
                                    </div>
                                </div>

                                <div class="flex items-start max-w-[595px] gap-6">
                                    <div class="flex items-center justify-center">
                                        <h3
                                            class="font-medium text-4xl text-[#1A1A1A33]"
                                            :class="{
                                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[1100ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            02
                                        </h3>
                                    </div>
                                    <div class="flex flex-col gap-5">
                                        <h3
                                            class="font-medium md:text-5xl text-3xl text-[#1A1A1A]"
                                            :class="{
                                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[1200ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            تمكين
                                        </h3>
                                        <h4
                                            class="font-normal md:text-2xl text-xl text-[#1A1A1A]"
                                            :class="{
                                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[1300ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            تمكين رواد الأعمال الاجتماعيين بالقدرات
                                            <br />
                                            والمهارات الريادية​
                                        </h4>
                                    </div>
                                </div>

                                <div class="flex items-start max-w-[595px] gap-6">
                                    <div class="flex items-center justify-center">
                                        <h3
                                            class="font-medium text-4xl text-[#1A1A1A33]"
                                            :class="{
                                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[1600ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            03
                                        </h3>
                                    </div>
                                    <div class="flex flex-col gap-5">
                                        <h3
                                            class="font-medium md:text-5xl text-3xl text-[#1A1A1A]"
                                            :class="{
                                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[1700ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            تأثير
                                        </h3>
                                        <h4
                                            class="font-normal md:text-2xl text-xl text-[#1A1A1A]"
                                            :class="{
                                                'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[1800ms]': shown,
                                                'invisible': !shown,
                                            }"
                                        >
                                            المساهمة في تحقيق تأثير اجتماعي
                                            <br />
                                            واقتصادي مستدام
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:block hidden h-20"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
