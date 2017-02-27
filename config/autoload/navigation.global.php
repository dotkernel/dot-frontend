<?php

return [
    'dot_navigation' => [
        //enable menu item active if any child is active
        'active_recursion' => true,

        'containers' => [
            'account_side_menu' => [
                'type' => 'ArrayProvider',
                'options' => [
                    'items' => [
                        [
                            'options' => [
                                'label' => 'Personal Information',
                                'route' => 'user',
                                'params' => ['action' => 'account'],
                            ],
                        ],
                        [
                            'options' => [
                                'label' => 'Change password',
                                'route' => 'user',
                                'params' => ['action' => 'change-password'],
                            ],
                        ],
                        [
                            'options' => [
                                'label' => 'Change email',
                                'route' => 'user',
                                'params' => ['action' => 'change-email'],
                            ],
                        ],
                        [
                            'options' => [
                                'label' => 'Delete account',
                                'route' => 'user',
                                'red-button' => true,
                                'params' => ['action' => 'remove-account'],
                            ],
                        ],
                    ],
                ],
            ],

            'main_menu' => [
                'type' => 'ArrayProvider',
                'options' => [
                    'items' => [
                        [
                            'options' => [
                                'label' => 'Contribute',
                                'uri' => 'https://github.com/dotkernel',
                                'icon' => 'fa fa-users',
                            ],
                            'attributes' => [
                                'target' => '_blank'
                            ],
                        ],
                        [
                            'options' => [
                                'label' => 'Pages',
                                'uri' => '#',
                                'icon' => 'fa fa-book',
                            ],
                            'pages' => [
                                [
                                    'options' => [
                                        'label' => 'Home',
                                        'route' => 'home',
                                        'icon' => 'fa fa-home'
                                    ]
                                ],
                                [
                                    'options' => [
                                        'label' => 'separator',
                                        'type' => 'separator',
                                    ]
                                ],
                                [
                                    'options' => [
                                        'label' => 'About Us',
                                        'route' => 'page',
                                        'params' => ['action' => 'about-us'],
                                        'icon' => 'fa fa-info-circle'
                                    ]
                                ],
                                [
                                    'options' => [
                                        'label' => 'Who we are',
                                        'route' => 'page',
                                        'params' => ['action' => 'who-we-are'],
                                        'icon' => 'fa fa-copyright'
                                    ]
                                ],
                                [
                                    'options' => [
                                        'label' => 'separator',
                                        'type' => 'separator',
                                    ]
                                ],
                                [
                                    'options' => [
                                        'label' => 'Premium Content',
                                        'route' => 'page',
                                        'params' => ['action' => 'premium-content'],
                                        'icon' => 'fa fa-trophy'
                                    ]
                                ],
                            ]
                        ],
                        [
                            'options' => [
                                'label' => 'Contact',
                                'route' => 'contact',
                                'params' => ['action' => ''],
                                'icon' => 'fa fa-envelope',
                            ]
                        ],
                    ],
                ],
            ],

            'account_menu' => [
                'type' => 'ArrayProvider',
                'options' => [
                    'items' => [
                        [
                            'options' => [
                                'label' => 'Welcome, ',
                                'id' => 'account',
                                'uri' => '#',
                                'icon' => 'fa fa-user',
                                'permission' => 'authenticated'
                            ],
                            'attributes' => [
                                'class' => 'navbar-colored-item',
                            ],
                            'pages' => [
                                [
                                    'options' => [
                                        'label' => 'Settings',
                                        'route' => 'user',
                                        'params' => ['action' => 'account'],
                                        'icon' => 'fa fa-wrench',
                                    ]
                                ],
                                [
                                    'options' => [
                                        'label' => 'Sign Out',
                                        'route' => 'logout',
                                        'icon' => 'fa fa-sign-out'
                                    ]
                                ]
                            ]
                        ],
                        [
                            'options' => [
                                'label' => 'Already registered?',
                                'type' => 'text',
                                'permission' => 'unauthenticated',
                            ],
                        ],
                        [
                            'options' => [
                                'label' => 'Login',
                                'route' => 'login',
                                'icon' => 'fa fa-sign-in',
                                'permission' => 'unauthenticated'
                            ],
                            'attributes' => [
                                'class' => 'navbar-colored-item',
                            ]
                        ],
                    ],
                ],
            ],
        ],

        //register custom providers here
        'provider_manager' => []
    ]
];
