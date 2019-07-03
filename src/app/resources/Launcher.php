<?php

namespace App\Resources;

final class Launcher extends Singleton
{

    /**
     * Retrieve and call the controller.
     */
    public function start()
    {
        if (null == App::instance()->get('page') || App::instance()->get('page') == "" || empty($this->get('page'))) {
            $this->controllerInit('home');
        } else {
            if (!file_exists("src/" . Settings::instance()->getProjectName() . "/Controllers/" . ucfirst($this->get('page')) . ".php")) {
                $this->controllerInit('notFound');
            } else {
                $this->controllerInit($this->get('page'));
            }
        }
    }

    /**
     * Initialize the controller with the page name.
     * @param $page
     */
    public function controllerInit($page)
    {
        $name = Settings::instance()->getProjectName() . '\\' . 'Controllers' . '\\' . ucfirst($page);
        $c = new $name;
        $c->start();
    }
}