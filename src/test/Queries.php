<?php

use PHPUnit\Framework\TestCase;
use Core\Resources\Database;
use Main\Models\User;

class Queries extends TestCase
{

    public function testInsertUser()
    {
        $db = new Database();
        $user = new User();
        $db->execute("
        CREATE TABLE `user` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `first_name` varchar(50) NOT NULL,
            `last_name` varchar(50) NOT NULL,
            `email` varchar(100) NOT NULL,
            `password` varchar(255) NOT NULL,
            `level` int(2) NOT NULL DEFAULT '1'
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8
        ",null);
        $user->createUser($db, 'Frederic', 'Sananes', 'fsananes@test.com', sha1('1234'));
        $response = $db->query("SELECT * FROM user",null)->fetchAll();
        $this->assertEquals(1, $response[0]['level']);
        $this->assertEquals("Frederic", $response[0]['first_name']);
        $this->assertEquals("Sananes", $response[0]['last_name']);
        $this->assertEquals("fsananes@test.com", $response[0]['email']);
        $this->assertEquals(sha1("1234"), $response[0]['password']);
        $this->assertEquals('1', $response[0]['level']);
    }
}
