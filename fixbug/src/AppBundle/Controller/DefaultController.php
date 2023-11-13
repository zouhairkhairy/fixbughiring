<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/api/getlist", name="homepage")
     */
    public function indexAction(Request $request)
    {
        dd($request);
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

        return $produits;
    }

}
