<?php

class Countries extends BaseController
{
    private $countryModel;

    public function __construct()
    {
        $this->countryModel = $this->model('Country');
    }

    public function index()
    {
        $result = $this->countryModel->getCountries();

        var_dump($result);


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