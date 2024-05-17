<?php

//Core-Class

class Core
{

    protected $currentController;
    protected $currentMethod;
    protected $params;
    //constructor van de Core-Class

    public function __construct()
    {
        if (isset($_GET['url'])) {

            //haalt de / weg uit de url
            $url = rtrim($_GET['url'], '/');

            //maakt de url schoon van html-tags double-quotes enz..
            $url = filter_var($url, FILTER_SANITIZE_URL);

            //zet de string gescheiden door een / in een array
            $url = explode('/', $url);
        } else {

            //wanneer er niets achter de vhost-naam staat, dan wordt het onderstaande in de $url gedumpt
            $url = array('homepages', 'index');
        }

        // var_dump($url);


        //checked of de controller bestaat
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {


            //zet dan de naam van de controller in curretnController

            $this->currentController = ucwords($url[0]);

            //zet de controller uit de array

            unset($url[0]);
        }

        //include de controller op deze pagina
        require_once '../app/controllers/' . $this->currentController . '.php';

        $this->currentController = new $this->currentController();

        //kijkt of er een tweede naam in de url staat

        if (isset($url[1])) {

            //kijkt of de methodnaam bestaat in de controller class
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                //haalt deze
                unset($url[1]);
            }
        }
        //stopt de rest van de urlnaam in een part array
        $this->params = $url ? array_values($url) : [];

        //roep nu de method aan met de betreffende method en bijbehorende parameters

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
}
