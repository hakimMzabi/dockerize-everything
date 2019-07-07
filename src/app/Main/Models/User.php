<?php

namespace Main\Models;

use Core\Resources\Database;

class User{

    public function test(){
        $db = new Database();
        $result = $db->query("SELECT * FROM notes_users", null);
        //$db->execute("INSERT INTO notes_users VALUES (?,?,?)", [1,2,20]);
    }

}
