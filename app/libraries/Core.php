<?php
/**
 * De Core class is de ruggegraat en meest belangrijke
 * class van het mvc-framework.
 */
class Core 
{

    public function __construct()
    {
        echo 'Arjan de Ruijter<br>';

        if (isset($_GET['url'])) {

            // Haal de forward-slash vooraan de url eraf
            $url = rtrim($_GET['url'], '/');

            // Maak de url schoon van html-tags, double-quotes, enz...
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Zet de string gescheiden door een / in een array
            $url = explode('/', $url);

        } else {

            /**
             * Wanneer er niets achter de vhost-naam wordt gezet
             * dan wordt het onderstaande array in $url gezet
             */
            $url = array('homepage', 'index');
        }
        var_dump($url);
    }
}