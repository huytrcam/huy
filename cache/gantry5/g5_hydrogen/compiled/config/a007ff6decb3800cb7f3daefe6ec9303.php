<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1463030625,
    'checksum' => 'f5f2d628f724e5a7b082fb2817f3d436',
    'files' => [
        'templates/g5_hydrogen/custom/config/10' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/index.yaml',
                'modified' => 1463030585
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/layout.yaml',
                'modified' => 1463030585
            ],
            'particles/frameworks' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/particles/frameworks.yaml',
                'modified' => 1462947225
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/styles.yaml',
                'modified' => 1463029025
            ]
        ],
        'templates/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1462940758
            ]
        ],
        'templates/g5_hydrogen/config/default' => [
            'page' => [
                'file' => 'templates/g5_hydrogen/config/default/page.yaml',
                'modified' => 1462940758
            ],
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1462940758
            ]
        ]
    ],
    'data' => [
        'page' => [
            'body' => [
                'doctype' => 'html',
                'attribs' => [
                    'class' => 'gantry'
                ],
                'layout' => [
                    'sections' => 0
                ],
                'class' => 'gantry'
            ],
            'doctype' => 'html'
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#439a86',
                'color-2' => '#8f4dae'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'body-font' => 'roboto, sans-serif',
                'heading-font' => 'roboto, sans-serif'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'footer' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'header' => [
                'background' => '#2a816d',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade'
            ],
            'navigation' => [
                'background' => '#e0ebe8',
                'text-color' => '#45b29a',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#354d59',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => 1
            ],
            'showcase' => [
                'background' => '#354d59',
                'image' => '',
                'text-color' => '#ffffff'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ],
            'preset' => 'preset1'
        ],
        'particles' => [
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'branding' => [
                'enabled' => true,
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ],
                    'display' => [
                        'image' => [
                            'enabled' => 'show'
                        ],
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ]
                    ]
                ]
            ],
            'copyright' => [
                'enabled' => true,
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ]
            ],
            'custom' => [
                'enabled' => true
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => '1',
                'jquery' => [
                    'enabled' => '1',
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'logo' => [
                'enabled' => '1',
                'url' => '',
                'image' => 'gantry-assets://images/gantry5-logo.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo'
            ],
            'menu' => [
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'mobileTarget' => 0
            ],
            'messages' => [
                'enabled' => true
            ],
            'mobile-menu' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ],
            'social' => [
                'enabled' => true,
                'css' => [
                    'class' => 'social'
                ],
                'target' => '_blank'
            ],
            'spacer' => [
                'enabled' => true
            ],
            'totop' => [
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
            ],
            'sample' => [
                'enabled' => true
            ]
        ],
        'index' => [
            'name' => 10,
            'timestamp' => 1463030585,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1462940758
            ],
            'positions' => [
                'footer' => 'Footer'
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1462940758
            ],
            'layout' => [
                '/header/' => [
                    
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'custom-2954 15',
                        1 => 'menu-9741 85'
                    ]
                ],
                '/showcase/' => [
                    0 => [
                        0 => 'custom-8171'
                    ],
                    1 => [
                        0 => 'custom-6497'
                    ]
                ],
                '/feature/' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-7115'
                    ],
                    1 => [
                        0 => 'sample-2'
                    ]
                ],
                '/subfeature/' => [
                    0 => [
                        0 => 'sample-3'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-8916 33.3',
                        1 => 'social-2858 33.3',
                        2 => 'branding-9943 33.3'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-8903'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'subfeature' => [
                    'type' => 'section',
                    'attributes' => [
                        'class' => 'flush',
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ],
            'content' => [
                'custom-2954' => [
                    'title' => 'Avatar',
                    'attributes' => [
                        'html' => '<div class="avatar">
<img src="images/avatar.jpg"/>
</div>'
                    ],
                    'block' => [
                        'class' => 'block-avatar'
                    ]
                ],
                'menu-9741' => [
                    'block' => [
                        'class' => 'block-menu'
                    ]
                ],
                'custom-8171' => [
                    'title' => 'Introduction',
                    'attributes' => [
                        'html' => '<div class="banner-text">
<h2>I\'m Huy Tran</h2>
<p>a web developer</p>
</div>
<div class="cloud" id="cloud1">
</div>
<div class="cloud" id="cloud3">
</div>'
                    ],
                    'block' => [
                        'class' => 'block-introduction'
                    ]
                ],
                'custom-6497' => [
                    'title' => 'Banner Landscape',
                    'attributes' => [
                        'html' => '<div class="banner-landscape">
<img src="images/banners/banner2.jpg"/>
</div>
<div class="cloud" id="cloud2"></div>'
                    ],
                    'block' => [
                        'class' => 'block-banner-landscape'
                    ]
                ],
                'sample-2' => [
                    'title' => 'Getting Started',
                    'attributes' => [
                        'description' => '<h1 class="center">Getting Started</h1>
<div class="device-promo"><div class="macbook"><div class="macbook-color"></div></div><div class="ipad"><div class="ipad-color"></div></div><div class="iphone"><div class="iphone-color"></div></div></div><p>Welcome to Gantry 5 featuring <strong>Hydrogen</strong>, the first theme built on the Gantry 5 framework. If you want to get started, the best way is to navigate to the Gantry Administrator via your platform\'s Administration panel.</p>

<p>Once you are in the Gantry 5 Administrator, you will be able to edit virtually every aspect of your site from its <strong>Layout</strong> to its <strong>Style</strong>. You can even refine how the menus appear using Gantry 5’s new <strong>Menu Editor</strong>.</p>

<p>You can set different style preferences for different pages, and have them assigned accordingly using the <strong>Assignments</strong> administrative panel.</p>

<div class="info-box"><div class="fa fa-graduation-cap float-left"></div><p>Look for more information on Gantry 5 in our documentation, and stay tuned to the RocketTheme Blog for more information on new features and development updates as development continues.</p>

<p><a href="http://docs.gantry.org" class="button">Learn More</a></p></div>

<h1 class="center">How to Contribute</h1>

<div class="g-grid">
<div class="g-block size-37"><p>Thank you for using Gantry 5 and the Hydrogen theme. We welcome you to contribute to the project by submitting bug reports through <strong>GitHub</strong>, and/or submit your own code changes to the <strong>Gantry 5 project</strong> for consideration.</p>
<p><a href="https://github.com/gantry/gantry5" class="button">Gantry 5 on GitHub</a></p>
</div>
<div class="g-block size-26 middle"><div class="fa fa-github-square"></div></div>

<div class="g-block size-37"><p>If you would like to assist in creating documentation for Gantry 5, you can do so through the <strong>Gantry 5 Documentation</strong> project on <strong>GitHub</strong>.</p>
<p><a href="https://github.com/gantry/docs" class="button">Gantry Docs on GitHub</a></p>
</div>
</div>

<p>Once again, thank you for participating. We hope you enjoy testing Gantry 5 every bit as much as we have enjoyed creating it.</p>'
                    ]
                ],
                'sample-3' => [
                    'title' => 'Key Features',
                    'attributes' => [
                        'headline' => 'Key Features',
                        'description' => '<p>Gantry 5 is packed full of features created to empower the development of designs into fully functional layouts with the absolute minimum effort and fuss</p>',
                        'samples' => [
                            0 => [
                                'icon' => 'fa fa-code',
                                'subtitle' => '',
                                'description' => '<p>Gantry 5 leverages the power of <a href="http://twig.sensiolabs.org/">Twig</a> to make creating powerful, dynamic themes quick and easy.</p>',
                                'title' => 'Twig Templating'
                            ],
                            1 => [
                                'icon' => 'fa fa-newspaper-o',
                                'subtitle' => '',
                                'description' => '<p>Drag-and-drop functionality gives you the power to place content blocks, resize them, and configure their unique settings in seconds.</p>',
                                'title' => 'Layout Manager'
                            ],
                            2 => [
                                'icon' => 'fa fa-cubes',
                                'subtitle' => '',
                                'description' => '<p>Create, configure, and manage content blocks as well as special features and functionality with the powerful particle system.</p>',
                                'title' => 'Particles System'
                            ]
                        ]
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ],
                'social-2858' => [
                    'attributes' => [
                        'css' => [
                            'class' => 'social-items'
                        ],
                        'items' => [
                            0 => [
                                'icon' => 'fa fa-twitter',
                                'text' => 'Twitter',
                                'link' => 'http://twitter.com/rockettheme',
                                'name' => 'Twitter'
                            ],
                            1 => [
                                'icon' => 'fa fa-facebook',
                                'text' => 'Facebook',
                                'link' => 'http://facebook.com/rockettheme',
                                'name' => 'Facebook'
                            ],
                            2 => [
                                'icon' => 'fa fa-google',
                                'text' => 'Google',
                                'link' => 'http://plus.google.com/+rockettheme',
                                'name' => 'Google'
                            ],
                            3 => [
                                'icon' => 'fa fa-rss',
                                'text' => 'RSS',
                                'link' => 'http://www.rockettheme.com/product-updates?rss',
                                'name' => 'RSS'
                            ]
                        ]
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'branding-9943' => [
                    'block' => [
                        'variations' => 'align-right'
                    ]
                ],
                'mobile-menu-8903' => [
                    'title' => 'Mobile Menu'
                ]
            ]
        ]
    ]
];
