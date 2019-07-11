<?php
require "../core/resources/Autoloader.php";
Core\Resources\Autoloader::register();

class Queries extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    public function setUp()
    {
        $this->pdo = new PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->query("
        CREATE TABLE `user` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `first_name` varchar(50) NOT NULL,
            `last_name` varchar(50) NOT NULL,
            `email` varchar(100) NOT NULL,
            `password` varchar(255) NOT NULL,
            `level` int(2) NOT NULL DEFAULT '1'
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8
        ");
    }

    public function tearDown()
    {
        if (!$this->pdo)
            return;
        $this->pdo->query("DROP TABLE user");
    }

    public function testInsertUser()
    {
        $this->pdo->query("INSERT INTO user VALUES ('Frederic','Sananes','fsananes@test.com',sha1('1234'),'level')");
        $response = $this->pdo->query("SELECT * FROM user")->fetchAll();
        $this->assertEquals(1,$response[0]['level']);
        $this->assertEquals("Frederic",$response[0]['first_name']);
        $this->assertEquals("Sananes",$response[0]['last_name']);
        $this->assertEquals("fsananes@test.com",$response[0]['email']);
        $this->assertEquals(sha1("1234"),$response[0]['password']);
        $this->assertEquals('1',$response[0]['level']);
    }
}
