<?php

namespace Drupal\programming_languages\Controller;

 use Drupal\Core\Controller\ControllerBase;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException; 

/**
* Controller routines for languages routes.
*/
class LanguagesController extends ControllerBase {

    /**
    * Callback function to get the data from REST API
    */
    public function getLanguages() {
        $languages = $this->fetchLanguages();
        $data = [];
        $data['title'] = 'Programming Languages';
        $data['languages'] = $languages;
        $build = [
            '#theme' => 'programming_languages_hook', 
            '#title' => 'D9 and Symfony 6 RESTful API', 
            '#data' => $data
        ];
        
        return $build;
    }
    
    /**
    * Fetches all the languages saved in the DB.
    */
    public function fetchLanguages() {
        try {
            $client = new Client();
            $response = $client->get('http://127.0.0.1:8080/api/v1/languages');
            $results = json_decode($response->getBody(), TRUE);
            return $results;
        }
        catch (RequestException $e) {
            return $e->getMessage();
        }
    }
}
    
    
    
    