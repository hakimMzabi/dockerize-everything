<?php

namespace Main\Controllers;

use Core\Resources\App;
use Main\Models\User;

class Home{

    public function start() {
        App::display('home');
    }

}
