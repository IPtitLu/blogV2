<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

// produits use 

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;

use App\Service\CardAccueil;
use App\Service\CardContact;

class Controller extends AbstractController
{
    /**
     * @Route("/", name="")
     */
    public function home(ProduitRepository $ProduitRepo): Response
    {
        $Produits = $ProduitRepo->limit();
        return $this->render('/index.html.twig', [
            'controller_name' => 'Controller.php',
            'article' => $Produits


        ]);
    }

    /**
     * @Route("/index", name="index")
     */
    public function index(ProduitRepository $ProduitRepo): Response
    {
        $Produits = $ProduitRepo->limit();
        return $this->render('/index.html.twig', [
            'controller_name' => 'Controller.php',
            'produits' => $Produits


        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(ProduitRepository $ProduitRepo): Response
    {
        $Produits = $ProduitRepo->lucas('Lucas');
        $cardContact = new CardContact($Produits);
        return $this->render('/about.html.twig', [
            'controller_name' => 'Controller.php',
            'article' => $Produits,
            'cards' => $cardContact->getCards()


        ]);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    public function userName()
    {
        $user = $this->getUser();

        return $this->render('base.html.twig', [
            'username' => $user
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
