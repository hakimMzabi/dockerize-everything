<?php

namespace Main\Controllers;

use Core\Resources\App;

class Home{

    public function start() {
        App::display('home');
    }

}
