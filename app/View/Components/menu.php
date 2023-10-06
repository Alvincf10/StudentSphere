<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class menu extends Component
{
    /**
     * Create a new component instance.
     */
    public $items;

    public function __construct()
    {
        // $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu');
    }

    public function list() {
        return [
            [
                'label' => 'Dashboard',
                'route' => 'dashboard',
                'type' => 'item',
                'icon' => 'ti ti-layout-dashboard'
            ],
            [
                'label' => 'Management Event',
                'route' => 'management-event',
                'type' => 'group',
                'icon' => 'ti ti-layout-dashboard',
                'children' =>[
                    [
                        'label' => 'Event',
                        'route' => 'event',
                        'type' => 'item',
                        'icon' => 'ti ti-point-filled'
                    ],
                    [
                        'label' => 'Location',
                        'route' => 'location',
                        'type' => 'item',
                        'icon' => 'ti ti-point-filled'
                    ],
                    [
                        'label' => 'Categroy',
                        'route' => 'category',
                        'type' => 'item',
                        'icon' => 'ti ti-point-filled'
                    ],
                    [
                        'label' => 'Organizer',
                        'route' => 'organizer',
                        'type' => 'item',
                        'icon' => 'ti ti-point-filled'
                    ],
                ]
            ],
            [
                'label' => 'Master Data',
                'route' => 'master-data',
                'type' => 'group',
                'icon' => 'ti ti-layout-dashboard',
                'children' =>[
                    [
                        'label' => 'about us',
                        'route' => 'about-us',
                        'type' => 'item',
                        'icon' => 'ti ti-point-filled'
                    ],
                ]
            ],
        ];
    }
}
