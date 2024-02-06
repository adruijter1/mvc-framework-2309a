<?php
/**
 * De Core class is de ruggegraat en meest belangrijke
 * class van het mvc-framework
 */
class Core 
{
    // In de $currentController stoppen we de naam van de controller
    protected $currentController = 'Homepages';

    public function __construct()
    {
        
        if (isset($_GET['url'])) {

            // Haal de forward-slash vooraan de url eraf
            $url = rtrim($_GET['url'], '/');

            // Maak de url schoon van html-tags, double-quotes, enz...
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // 
            Zet de string gescheiden door een / in een array
            $url = explode('/', $url);

        } else {

            /**
             * Wanneer er niets achter de vhost-naam wordt gezet
             * dan wordt het onderstaande array in $url gezet
             */
            $url = array('homepages', 'index');
        }
        
        /**
         * Check of de controllerclass bestaat
         */
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {

            /**
             * Stop de naam van de controller in $this->currentController
             */
            $this->currentController = ucwords($url[0]);

            /**
             * Haal de naam van de controller uit het $url array
             */
            unset($url[0]);
        }
        
    }
}