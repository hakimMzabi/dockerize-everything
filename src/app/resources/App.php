<?php

namespace App\Resources;

final class App extends Singleton
{
    /**
     * Display an PHP page depending on its name.
     * Model is used
     * @param $page
     */
    public static function display($page)
    {
        ob_start();
        /** @noinspection PhpUnusedLocalVariableInspection */
        $models = App::instance()->getPageModels($page);
        require "src/" . Settings::instance()->getSettings()->{'main_project'}->{'name'} . "/Views/content/" . $page . ".php";
        /** @noinspection PhpUnusedLocalVariableInspection */
        $content = ob_get_contents();
        ob_end_clean();
        require "src/" . Settings::instance()->getSettings()->{'main_project'}->{'name'} . "/Views/layout/layout.php";
    }

    /**
     * Parse JSON content;
     * @param $file
     * @return mixed
     */
    function getJsonInformation($file)
    {
        $json = file_get_contents('app/' . $file, true);
        $parsed_json = json_decode($json);
        return $parsed_json;
    }

    private function getPageModels(String $test): array
    {
        // TODO Finish method to get page relative models
        $models = [];
        return $models;
    }

    /**
     * Return a $_GET element.
     * @param $v
     * @return mixed
     */
    public function get($v)
    {
        return filter_input(INPUT_GET, $v);
    }
}
