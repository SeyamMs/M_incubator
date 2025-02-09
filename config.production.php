<?php

return [

    'production' => true,
    'baseUrl' => $baseUrl = 'https://ic-ncnp.com',
    'asset' => fn($page, $source) => $baseUrl . str($source)->start('/assets/'),
    'route' => fn($page, $source) => $baseUrl . str($source)->start('/'),

];
