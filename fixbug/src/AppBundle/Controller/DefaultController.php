<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController

{

    
    /**
     * @Route("/api/getlist", name="homepage")
     */
    public function indexAction()
    {
        $produits = [
            [
                "nom" => "Ordinateur portable",
                "marque" => "Dell",
                "prix" => 799.99,
                "stock" => 10
            ],
            [
                "nom" => "Écran LED 27 pouces",
                "marque" => "HP",
                "prix" => 249.99,
                "stock" => 5
            ],
            [
                "nom" => "Souris sans fil",
                "marque" => "Logitech",
                "prix" => 19.99,
                "stock" => 20
            ],
            [
                "nom" => "Clavier mécanique RGB",
                "marque" => "Corsair",
                "prix" => 129.99,
                "stock" => 15
            ]
        ];

        // Create a JSON response
        $response = new JsonResponse($produits);

        // Set CORS headers
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type');

        return $response;
    }

    /**
     * @Route("/api/newroute", name="new-route")
     */
    public function newRouteAction()
    {
        $response = [
            'message' => 'Nouvelle action créée avec succès',
        ];
        
        $response = new JsonResponse($response);

        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type');

        return $response;
    }
}
