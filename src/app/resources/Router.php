<?php
/**
 * Created by Théo Huchard
 * Filename: Router.php
 * Date: 1/18/2019
 * Time: 8:16 PM
 */

namespace App\Resources;


final class Router extends Singleton
{

    /**
     * Redirects the user to another page
     * @param $url
     */
    public function redirect($url)
    {
        header("Location: " . BASE_URL . $url);
    }
}