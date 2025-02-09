<header
    class="fixed top-0 right-0 z-50 flex flex-col items-center w-full overflow-hidden"
    x-data="{ shown: false, showFixed: window.scrollY > 115 }"
    x-intersect.threshold.20="shown = true"
    x-on:scroll.window="showFixed = window.scrollY > 115"
    :class="{ 'bg-[#0C344A]': showFixed }"
>
    <div class="xl:px-4 lg:px-2 md:px-4 container relative px-2 py-6 mx-auto">
        <div class="relative z-10 flex w-full">
            <div class="lg:justify-between xl:gap-4 lg:gap-2 flex items-center justify-center w-full gap-4">
                <div
                    class="flex-shrink-0"
                    :class="{
                        'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <div class="lg:block hidden xl:h-[72px] h-16">
                        <img
                            class="size-full object-scale-down"
                            src="{{ $page->asset('images/moe-logo.svg') }}"
                            alt="moe-logo"
                        />
                    </div>
                </div>


                <div
                    class="bg-opacity-15 backdrop-blur md:p-3 lg:p-4 flex flex-shrink-0 p-2 bg-white rounded-full"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] lg:motion-delay-[900ms] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <div class="lg:gap-2 flex items-center gap-1">
                        <button
                            class="md:text-sm flex-shrink-0 p-2 text-xs font-medium text-white"
                            x-data
                            x-on:click.prevent="$scroll('#offerings-section', {behavior: 'smooth', offset: '80px'})"
                        >
                            ماذا تقدم الحاضنة
                        </button>
                        <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <button
                            class="md:text-sm flex-shrink-0 p-2 text-xs font-medium text-white"
                            x-data
                            x-on:click.prevent="$scroll('#targets-section', {behavior: 'smooth', offset: '80px'})"
                        >
                            الفئات المستهدفة
                        </button>
                        <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <button
                            class="md:text-sm flex-shrink-0 p-2 text-xs font-medium text-white"
                            x-data
                            x-on:click.prevent="$scroll('#timeline-section', {behavior: 'smooth', offset: '80px'})"
                        >
                            رحلة المشروع​
                        </button>
                        <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <button
                            class="md:text-sm sm:block flex-shrink-0 hidden p-2 text-xs font-medium text-white"
                            x-data
                            x-on:click.prevent="$scroll('#paths-section', {behavior: 'smooth', offset: '80px'})"
                        >
                            المسارات الرئيسية​
                        </button>
                        <div class="md:w-28 flex items-center flex-shrink-0 h-8">
                            <button
                                class="text-lg group hover:bg-[#6d5d8250] hover:ring-2 hover:ring-opacity-60 hover:ring-white font-semibold rounded-full flex items-center justify-between hover:justify-center p-1 h-8 md:w-28 bg-white hover:text-white text-[#0E4D70]"
                                data-tf-popup="ZMP5NAGv"
                            >
                                <div class="flex justify-center flex-grow">
                                    <span class="md:text-sm px-2 text-xs">
                                        انضم الينا
                                    </span>
                                </div>
                                <div
                                    class="group-hover:hidden sm:flex hidden shrink-0 items-center justify-center size-7 rounded-full bg-[#0E4D70]">
                                    <img
                                        class="w-4"
                                        src="{{ $page->asset('images/icons/lamp-light.svg') }}"
                                        alt="lamp-light"
                                    />
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="flex-shrink-0"
                    :class="{
                        'motion-preset-fade -motion-translate-x-in-[40px] motion-delay-[600ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <div class="lg:block hidden xl:h-[72px] h-16 w-[184px]">
                        {{-- <img
                            class="size-full object-scale-down"
                            src="{{ $page->asset('images/maoon-icon-white.svg') }}"
                            alt="maoon-icon-white"
                        /> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
