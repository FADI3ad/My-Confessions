<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserCard extends Component
{
    public $photo;
    public $name;
    public $phone;
    public $dob;
    public $slug;

    public $gender;
    public function __construct($photo, $name, $phone, $dob, $slug,$gender)
    {
        $this->photo = $photo;
        $this->name = $name;
        $this->phone = $phone;
        $this->dob = $dob;
        $this->slug = $slug;
        $this->gender = $gender;
    }

    public function render()
    {
        return view('components.user-card');
    }
}
