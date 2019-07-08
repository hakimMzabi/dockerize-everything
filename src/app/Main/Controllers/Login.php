<?php

namespace Main\Controllers;

use Core\Resources\App;
use Core\Resources\Database;
use Main\Models\User;

class Login{

    public function start() {
        $db = new Database();
        $user = new User();
        $user->login($db);
        App::html('login');
    }

}
