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
        /**
         * De controller roept de model aan om de landen op te halen
         */
        $countries = $this->countryModel->getCountries();

        // var_dump($countries);

        $dataRows = "";

        /**
         * Loop door de resultaten heen en maak een tabelrij voor elk land
         */
        foreach ($countries as $country) {
            $dataRows .= "<tr>
                            <td>{$country->Name}</td>
                            <td>{$country->CapitalCity}</td>
                            <td>{$country->Continent}</td>
                            <td>" . number_format($country->Population, 0, ",", ".") . "</td>            
                        </tr>";
        }

        /**
         * Het array gevuld met informatie voor de view
         */
        $data = [
            'title' => 'Landen van de Wereld',
            'dataRows' => $dataRows
        ];

        /**
         * De controller roept de view aan en geeft het $data-array mee
         */
        $this->view('countries/index', $data);
    }
}