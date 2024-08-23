<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Subsubmenu;
use Illuminate\Support\Str; // <-- Import Str for UUID generation
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {     
        $menus = [
            [
                'name' => 'Main Menu 1',
                'submenus' => [
                    [
                        'name' => 'Submenu 1.1',
                        'subsubmenus' => [
                            ['name' => 'Subsubmenu 1.1.1'],
                            ['name' => 'Subsubmenu 1.1.2'],
                        ]
                    ],
                    [
                        'name' => 'Submenu 1.2',
                        'subsubmenus' => [
                            ['name' => 'Subsubmenu 1.2.1'],
                            ['name' => 'Subsubmenu 1.2.2'],
                        ]
                    ]
                ]
            ],
            [
                'name' => 'Main Menu 2',
                'submenus' => [
                    [
                        'name' => 'Submenu 2.1',
                        'subsubmenus' => [
                            ['name' => 'Subsubmenu 2.1.1'],
                            ['name' => 'Subsubmenu 2.1.2'],
                        ]
                    ],
                    [
                        'name' => 'Submenu 2.2',
                        'subsubmenus' => [
                            ['name' => 'Subsubmenu 2.2.1'],
                            ['name' => 'Subsubmenu 2.2.2'],
                        ]
                    ]
                ]
            ],
            [
                'name' => 'Main Menu 3',
                'submenus' => [
                    [
                        'name' => 'Submenu 3.1',
                        'subsubmenus' => [
                            ['name' => 'Subsubmenu 3.1.1'],
                            ['name' => 'Subsubmenu 3.1.2'],
                        ]
                    ],
                    [
                        'name' => 'Submenu 3.2',
                        'subsubmenus' => [
                            ['name' => 'Subsubmenu 3.2.1'],
                            ['name' => 'Subsubmenu 3.2.2'],
                        ]
                    ]
                ]
            ],
            [
                'name' => 'Main Menu 4',
                'submenus' => [
                    [
                        'name' => 'Submenu 4.1',
                        'subsubmenus' => [
                            ['name' => 'Subsubmenu 4.1.1'],
                            ['name' => 'Subsubmenu 4.1.2'],
                        ]
                    ],
                    [
                        'name' => 'Submenu 4.2',
                        'subsubmenus' => [
                            ['name' => 'Subsubmenu 4.2.1'],
                            ['name' => 'Subsubmenu 4.2.2'],
                        ]
                    ]
                ]
            ],
            [
                'name' => 'Main Menu 5',
                'submenus' => [
                    [
                        'name' => 'Submenu 5.1',
                        'subsubmenus' => [
                            ['name' => 'Subsubmenu 5.1.1'],
                            ['name' => 'Subsubmenu 5.1.2'],
                        ]
                    ],
                    [
                        'name' => 'Submenu 5.2',
                        'subsubmenus' => [
                            ['name' => 'Subsubmenu 5.2.1'],
                            ['name' => 'Subsubmenu 5.2.2'],
                        ]
                    ]
                ]
            ],
        ];

        // Loop through the menus 
        foreach ($menus as $menuData) {
            $menu = Menu::create([
                'name' => $menuData['name'],
                'uuid' => Str::uuid(),
            ]);

            foreach ($menuData['submenus'] as $submenuData) {
                $submenu = Submenu::create([
                    'name' => $submenuData['name'],
                    'menu_id' => $menu->id,
                    'uuid' => Str::uuid(),
                ]);

                foreach ($submenuData['subsubmenus'] as $subsubmenuData) {
                    Subsubmenu::create([
                        'name' => $subsubmenuData['name'],
                        'submenu_id' => $submenu->id,
                        'uuid' => Str::uuid(),
                    ]);
                }
            }
        }
    }
}
