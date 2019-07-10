<?php

namespace Main\Models;

<<<<<<< HEAD
use Core\Resources\Database;

class User
{

=======
class User
{

>>>>>>> architecture
    public function register($db)
    {
        if (isset($_POST['submit'])) {
            $first_name = $_POST['first-name'];
            $last_name = $_POST['last-name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirmation = $_POST['password-confirmation'];
            if ($password_confirmation === $password) {
                $crypted_password = sha1($password);
                $db->execute("INSERT INTO user (first_name, last_name, email, password) VALUES (?, ?, ?, ?)", [$first_name, $last_name, $email, $crypted_password]);
                header('Location: /home');
            } else {
                var_dump("Password doesn't match");
            }
        }
    }

    public function login($db)
    {
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $response = $db->query("SELECT * FROM user WHERE email = ? AND password = ?", [$email, sha1($password)]);
            $length = sizeof($response);
            if ($length == 1) {
                $_SESSION['connected'] = true;
                $_SESSION['id'] = $response[0]['id'];
                $_SESSION['first_name'] = $response[0]['first_name'];
                $_SESSION['last_name'] = $response[0]['last_name'];
                $_SESSION['email'] = $response[0]['email'];
<<<<<<< HEAD
=======
                $_SESSION['level'] = (int)$response[0]['level'];
>>>>>>> architecture
                header('Location: index.php');
            } else {
                var_dump("Wrong password.");
            }
        }
    }

}
