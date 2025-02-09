<section
    class="relative flex items-center overflow-hidden bg-[#0E4D70]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-[84px] md:px-8 lg:py-20 md:py-16 relative z-10 size-full px-4 py-12">
        <div class="container mx-auto">
            <div class="flex flex-col items-center justify-center h-full">
                <div
                    class="mb-14 h-32"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[600ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <img
                        class="object-scale-down size-full"
                        src="{{ $page->asset('images/moe-logo.svg') }}"
                        alt="moe-logo"
                    />
                </div>

                <div class="gap-9 flex flex-col max-w-[1024px] mx-auto mb-12">
                    <p
                        class="lg:text-[24px] md:text-[22px] text-[16px] font-medium text-white text-center"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[900ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        تسعى إدارة التنمية المجتمعية في وزارة الطاقة لتحفيز وتشجيع الريادة الاجتماعية ضمن قطاع الطاقة في
                        المملكة العربية السعودية من خلال استقطاب الأفكار الإبداعية وتحويلها إلى شركات اجتماعية قائمة ضمن
                        مبادراتها في تمكين التنمية المجتمعية في القطاع للمساهمة في زيادة عدد المنشآت الصغيرة والمتوسطة
                        لتحقيق مستهدفات رؤية المملكة 2030.
                    </p>
                </div>

                <div class="flex items-center h-20">
                    <a
                        class="lg:text-2xl text-lg group hover:ring-8 hover:ring-opacity-60 hover:ring-white font-medium rounded-full flex items-center justify-center py-2 px-6 h-16 hover:px-20 bg-white text-[#0D0D12]"
                        href="https://www.moenergy.gov.sa/en/TheMinistry/About/Pages/Default.aspx"
                        target="_blank"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1200ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        <span class="px-6">
                            اعرف المزيد
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute inset-0 z-0">
        <img
            class="object-cover object-center size-full"
            src="{{ $page->asset('images/moe-section-bg-pattern.png') }}"
            alt="moe-section-bg-pattern"
            :class="{
                'motion-preset-fade motion-delay-[300ms]': shown,
                'invisible': !shown,
            }"
        />
    </div>

</section>
