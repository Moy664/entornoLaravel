<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    /**
     * Create a new component instance.
     */

    public $class;

    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $class = 'bg-blue-100 text-blue-800';
                break;
                
            case 'success':
                $class = 'bg-green-100 text-green-800';
                break;
            case 'warning':
                $class = 'bg-yellow-100 text-yellow-800';
                break;
            case 'error':
                $class = 'bg-red-100 text-red-800';
                break;
            default:
                $class = 'bg-gray-100 text-gray-800';
        }
        $this-> class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
