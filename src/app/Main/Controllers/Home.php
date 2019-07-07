<?php

namespace Main\Controllers;

use Core\Resources\App;
use Main\Models\User;

class Home{

    public function start() {
        $u = new User();
        $u->test();
        App::display('home');
    }

}
