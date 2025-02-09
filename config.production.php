<?php

return [

    'production' => true,
    'baseUrl' => $baseUrl = 'https://seyamms.github.io/M_incubator',
    'asset' => fn($page, $source) => $baseUrl . str($source)->start('/assets/'),
    'route' => fn($page, $source) => $baseUrl . str($source)->start('/'),

];
