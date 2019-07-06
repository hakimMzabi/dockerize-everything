<?php

namespace Main\Controllers;

use App\Resources\App;

class Home{

    public function start() {
        App::display('home');
    }

}
