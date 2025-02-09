<?php

return [

    'production' => false,
    'baseUrl' => $baseUrl = 'http://localhost:8000',

    'title' => 'MOE 2025',
    'description' => 'حاضنة وزارة الطاقة​ ، تمكين المشاريع الاجتماعية في قطاع الطاقة​',
    'keywords' => [
        'تمكين المشاريع الاجتماعية في قطاع الطاقة​',
        'حاضنة وزارة الطاقة​',
        'وزارة الطاقة',
        'وزارة',
        'الطاقة',
        'حاضنة',
        'MOE 2025',
    ],

    'asset' => fn($page, $source) => $baseUrl . str($source)->start('/assets/'),
    'route' => fn($page, $source) => $baseUrl . str($source)->start('/'),

];
