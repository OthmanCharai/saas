<?php

use App\Core\Adapters\Theme;

Theme::$demo = 'skin';

return [
    // Refer to config/global/menu.php

    // Main menu
    'main'          => [
        //// Dashboard
        array(
            'title' => 'Sites',
            'path'  => 'sites',
            'icon'  => theme()->getSvgIcon("icons/duotone/Design/PenAndRuller.svg", "svg-icon-2"),
        ),
        array(
            'title' => 'Users',
            'path'  => 'users',
            'icon'  => theme()->getSvgIcon("icons/duotone/Design/PenAndRuller.svg", "svg-icon-2"),
        ),
        array(
            'title' => 'Billing',
            'path'  => 'billing',
            'icon'  => theme()->getSvgIcon("icons/duotone/Design/PenAndRuller.svg", "svg-icon-2"),
        ),

    ],

    // Horizontal menu
    'horizontal'    => [],
];