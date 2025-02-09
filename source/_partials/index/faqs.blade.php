@php
    $paths = [
        [
            'title' => '1. ما هو تحدي الابتكار في خدمة ضيوف الرحمن؟',
            'answer' =>
                'هو حدث وطني يهدف إلى تحفيز التفكير الابتكاري واستقطاب الأفكار المبدعة لحل التحديات التي تواجه قطاع ضيوف الرحمن',
        ],
        [
            'title' => '2. ما هي أهداف التحدي؟',
            'answer' =>
                'يهدف التحدي إلى تمكين المنظمات غير الربحية بقدرات وأدوات مبتكرة لتقديم خدمات متميزة لضيوف الرحمن. ولخلق حلول مستدامة تعزز استمرارية الخدمات وأثر المنظمات غير الربحية في خدمة ضيوف الرحمن.',
        ],
        [
            'title' => '3. ما هي اللغة المستخدمة في التحدي؟',
            'answer' => 'اللغة العربية.',
        ],
        [
            'title' => '4. ما هي خطوات التسجيل في التحدي؟',
            'answer' =>
                'بإمكانك التسجيل في التحدي عبر الدخول على المنصة (من هنا)، ثم الاطلاع على المسارات والتحديات الموجودة على المنصة، ثم بعد ذلك اختيار التحدي الذي تود المشاركة فيه، ثم تقديم حلك المبتكر بعد إضافة بيانات التواصل الخاص بك.',
        ],
        [
            'title' =>
                '5. لدي حل وفكرة ابتكارية تخدم قطاع ضيوف الرحمن من خارج المسارات والتحديات المذكورة في المنصة، هل يمكنني المشاركة؟',
            'answer' =>
                'نعم بالطبع، بإمكانك المشاركة بطرح فكرة جديدة ومبتكرة تخدم مجالًا غير موجود في المسارات المحددة',
        ],
        [
            'title' => '6. هل بإمكاني التسجيل في جميع المسارات؟',
            'answer' => 'نعم، يمكنك التسجيل بأكثر من مسار، ولكن ستشارك بفكرة واحدة إذا تم ترشيحك للمرحلة التالية.',
        ],
        [
            'title' => '7. هل يتطلب وجود فريق؟ وكم العدد المسموح لأعضاء الفريق الواحد؟',
            'answer' =>
                'يمكنك المشاركة في التحدي كفرد أو باسم جمعية  ولكن بعد ترشح فكرتك للمرحلة التالية لا بد من تكوين فريق من شخص آخر  يحمل معك الفكرة للمشاركة في التحدي.',
        ],
        [
            'title' => '8. هل يمكن تغيير أعضاء الفريق بعد التسجيل؟',
            'answer' =>
                'نعم يمكنك تغيير أعضاء الفريق بعد التسجيل، ولكن عند الترشح للمرحلة التالية لابد من توفر شخصين لتمثيل الفكرة والمشاركة في المعسكر.',
        ],
        [
            'title' => '9. هل توجد رسوم تسجيل في التحدي؟',
            'answer' => 'لا، لا توجد رسوم تسجيل.',
        ],
        [
            'title' => '10. هل يُشترط للاشتراك في التحدي العمل في جمعية أهلية؟',
            'answer' => 'لا، لا يُشترط.',
        ],
    ];
@endphp

<section
    class="relative flex items-center overflow-hidden bg-white"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 size-full px-4 py-12">
        <div class="container mx-auto">
            <div class="md:gap-14 flex flex-col gap-8">

                <h2
                    class="lg:text-[48px] md:text-[32px] text-[28px] text-center font-medium text-black"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    الاسئلة الشائعة
                </h2>

                <div class="md:gap-8 grid grid-cols-6 gap-4">

                    @foreach ($paths as $index => $path)
                        <div class="md:col-span-3 col-span-6">
                            <div
                                class="rounded-3xl overflow-hidden bg-gray-100"
                                x-data="{ open: false }"
                                :class="{
                                    '!bg-gray-200': open,
                                    'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 100 + 300 }}ms]': shown,
                                    'invisible': !shown,
                                }"
                            >
                                <div
                                    class="md:px-8 md:py-6 md:gap-8 flex items-center justify-between gap-4 px-4 py-3 cursor-pointer"
                                    x-on:click="open = !open"
                                >
                                    <h3
                                        class="text-[#1B1B1B] lg:text-[26px] md:text-[20px] text-[16px] font-medium text-start">
                                        {!! $path['title'] !!}
                                    </h3>
                                    <div
                                        class="md:p-4 flex-shrink-0 p-3 transition-all duration-150"
                                        :class="{ 'transform rotate-45': open }"
                                    >
                                        <img
                                            src="{{ $page->asset('images/icons/plus.svg') }}"
                                            alt="plus"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="md:px-8 md:py-4 px-4 py-2"
                                    x-cloak
                                    x-collapse
                                    x-show="open"
                                >
                                    <p class="md:text-lg text-base font-bold">
                                        {!! $path['answer'] !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
