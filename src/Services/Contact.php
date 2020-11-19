<?php

namespace App\Service;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CardContact
{

    private $produits;

    public function  __construct($desProduits)
    {
        $this->produits = $desProduits;
    }

    /**
     * @Route("/index", name="index")
     */
    public function getCards()
    {
        $html = '';
        foreach ($this->produits as $produit) {
            $html .= '
                    <div class="col-md-4" >
                            <img src="/img/' . $produit->getImage() . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">' . $produit->getTitre() . '</h5>
                                <p class="card-text">' . $produit->getContenu() . '</p>
                            </div>
                    </div>
            ';

            //dump($_SESSION['idA']);die;

            //dump($html);die;
        }

        return $html;
    }

    /*.$this->path.$this->$articles->getImage().*/
    /*<img src="" class="card-img-top" alt="...">*/
}
