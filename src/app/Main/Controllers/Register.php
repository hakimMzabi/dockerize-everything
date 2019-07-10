<?php

namespace Main\Controllers;

use Core\Resources\App;
use Core\Resources\Database;
use Main\Models\User;

class Register{

    public function start() {
        $db = new Database();
        $user = new User();
        $user->register($db);
<<<<<<< HEAD
        App::display('register');
=======
        App::html('register');
>>>>>>> architecture
    }

}
