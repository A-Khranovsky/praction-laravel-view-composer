<?php

namespace App\View\Composers;

use Illuminate\View\View;

class UserNameComposer
{
    protected $userName;

    public function __construct()
    {
        if(session('user_name')){
            $this->userName = session('user_name');
        }
    }

    public function compose(View $view)
    {
        $view->with('userName', $this->userName);
    }
}
