<?php

class Countries extends BaseController
{


    public function index()
    {
        /**
         * Het array gevuld met informatie voor de view
         */
        $data = [
            'title' => 'Landen van de Wereld'
        ];

        /**
         * De controller roept de view aan en geeft het $data-array mee
         */
        $this->view('countries/index', $data);
    }
}