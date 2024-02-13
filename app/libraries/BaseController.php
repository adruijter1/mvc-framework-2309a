<?php

class BaseController
{

    /**
     * De view method laadt het view-bestand en geeft informatie
     * mee aan de view met het $data-array
     */
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php'))
        {
            require_once('../app/views/' . $view . . '.php');
        } else {
            echo 'View bestaat niet';
        }
    }
}