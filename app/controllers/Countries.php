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
        $countries = $this->countryModel->getCountries();

        $dataRows = "";

        foreach ($countries as $country) {
            $dataRows .= "<tr>
                            <td>{$country->Name}</td>
                            <td>{$country->CapitalCity}</td>
                            <td>{$country->Continent}</td>
                            <td>" . number_format($country->Population, 0, ",", ".") . "</td>
                            <td>
                                <a href='" . URLROOT . "/countries/update/{$country->Id}'>
                                    <i class='bi bi-pencil-square'></i>
                                </a>
                            </td>
                            <td>
                                <a href='" . URLROOT . "/countries/delete/{$country->Id}'>
                                    <i class='bi bi-trash'></i>
                                </a>
                            </td>            
                        </tr>";
        }

        $data = [
            'title' => 'Landen van de Wereld',
            'dataRows' => $dataRows
        ];

        $this->view('countries/index', $data);
    }

    /**
     * Creates a new country.
     *
     * This method is responsible for rendering the create view and passing the necessary data to it.
     *
     * @return void
     */
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            /**
             * Maak het $_POST-array schoon van ongewenste tekens en tags
             */
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            /**
             * Roep de createCountry methode aan van het countryModel object waardoor
             * de gegevens in de database worden opgeslagen
             */
            $result = $this->countryModel->createCountry($_POST);

            echo '<div class="alert alert-success" role="alert">
                    Uw gegevens zijn opgeslagen. U wordt doorgestuurd naar de index-pagina.
                  </div>';

            /**
             * Na het opslaan van de formulier wordt de gebruiker teruggeleid naar de index-pagina
             */
            header("Refresh:6; url=" . URLROOT . "/countries/index");
        }

        $data = [
            'title' => 'Nieuw land toevoegen'
        ];

        $this->view('countries/create', $data);
    }

    public function update($countryId)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $this->countryModel->updateCountry($_POST);

            echo '<div class="alert alert-success" role="alert">
                    Het land is gewijzigd. U wordt doorgestuurd naar de index-pagina.
                </div>';
                
            header("Refresh:3; url=" . URLROOT . "/countries/index");
        }

        $result = $this->countryModel->getCountry($countryId);

        $data = [
            'title' => 'Wijzig land',
            'Id' => $result->Id,
            'country' => $result->Name,
            'capitalCity' => $result->CapitalCity,
            'continent' => $result->Continent,
            'population' => $result->Population
        ];

        $this->view('countries/update', $data);
    }

    public function delete($countryId)
    {
       $result = $this->countryModel->deleteCountry($countryId);

       $data = [
           'message' => 'Het record is verwijderd. U wordt doorgestuurd naar de index-pagina.'
       ];

       header("Refresh:3; " . URLROOT . "/countries/index");

       $this->view('countries/delete', $data);
    }
}