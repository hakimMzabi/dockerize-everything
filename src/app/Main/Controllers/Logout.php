<?php

namespace Main\Controllers;

use Core\Resources\App;
use Core\Resources\Database;
use Main\Models\User;

class Logout{

    public function start() {
        session_destroy();
        header("Location: /home");
    }

}
