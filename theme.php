<?php

use Jinya\Cms\Theming\Theme;

return [
    'displayName' => 'Jinya Testing Theme',
    'description' => ['en' => "A simple theme for testing purposes. This theme has no real frontend so don't use it"],
    'previewImage' => __DIR__ . '/Preview.jpg',
    'errorBehavior' => Theme::ERROR_BEHAVIOR_ERROR_PAGE,
    'styles' => [
        'variables' => __DIR__ . '/styles/_variables.scss',
        'files' => [
            __DIR__ . '/styles/frontend.scss',
        ],
    ],
    'assets' => [
        'asset1' => __DIR__ . '/assets/icons/facebook.svg',
        'asset2' => __DIR__ . '/assets/icons/pinterest.svg',
        'asset3' => __DIR__ . '/assets/icons/twitter.svg',
        'poppins400Regular' => __DIR__ . '/assets/fonts/Poppins.latin.regular.woff2',
    ],
    'scripts' => [
        __DIR__ . '/scripts/helloworld.js',
    ],
    'configuration' => [
        'configGroup1' => [
            'text' => 'Text value',
        ],
        'configGroup2' => [
            'text1' => 'Text value',
            'text2' => 'Text value',
            'boolean1' => false,
        ],
    ],
    'configurationStructure' => [
        'groups' => [
            [
                'name' => 'configGroup1',
                'title' => ['en' => 'Config Group 1'],
                'fields' => [
                    [
                        'name' => 'text',
                        'type' => 'string',
                        'label' => ['en' => 'Text value 1'],
                    ],
                ],
            ],
            [
                'name' => 'configGroup2',
                'title' => ['en' => 'Config Group 2'],
                'fields' => [
                    [
                        'name' => 'text1',
                        'type' => 'string',
                        'label' => ['en' => 'Text value 1'],
                    ],
                    [
                        'name' => 'text2',
                        'type' => 'string',
                        'label' => ['en' => 'Text value 2'],
                    ],
                    [
                        'name' => 'boolean1',
                        'type' => 'boolean',
                        'label' => ['en' => 'Boolean value 1'],
                    ],
                ],
            ],
        ],
        'links' => [
            'section_pages' => [
                'ModernPage1' => ['en' => 'Segment Page 1'],
                'ModernPage2' => ['en' => 'Segment Page 2'],
                'ModernPage3' => ['en' => 'Segment Page 3'],
            ],
            'menus' => [
                'menu1' => ['en' => 'Menu 1'],
                'menu2' => ['en' => 'Menu 2'],
                'menu3' => ['en' => 'Menu 3'],
            ],
            'pages' => [
                'page1' => ['en' => 'Page 1'],
                'page2' => ['en' => 'Page 2'],
                'page3' => ['en' => 'Page 3'],
            ],
            'forms' => [
                'form1' => ['en' => 'Form 1'],
                'form2' => ['en' => 'Form 2'],
                'form3' => ['en' => 'Form 3'],
            ],
            'galleries' => [
                'gallery1' => ['en' => 'Gallery 1'],
                'gallery2' => ['en' => 'Gallery 2'],
                'gallery3' => ['en' => 'Gallery 3'],
            ],
            'files' => [
                'file1' => ['en' => 'File 1'],
                'file2' => ['en' => 'File 2'],
                'file3' => ['en' => 'File 3'],
            ],
            'blog_categories' => [
                'blogCategory1' => ['en' => 'Category 1'],
                'blogCategory2' => ['en' => 'Category 2'],
                'blogCategory3' => ['en' => 'Category 3'],
            ],
        ],
    ],
];
