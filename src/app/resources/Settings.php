<?php

namespace App\Resources;


final class Settings extends Singleton
{
    /**
     * Returns the settings of the application
     * @return mixed
     */
    function getSettings()
    {
        $settings = App::instance()->getJsonInformation("settings.json");
        return $settings;
    }

    /**
     * @return String
     */
    function getProjectName(): String
    {
        return $this->getSettings()->{"main_project"}->{"name"};
    }


}