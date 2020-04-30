<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class homepageController extends AbstractController {

    /**
     * @Route("/", name ="homepage")
     */
    public function welcome() {
        // TODO : redirectToRoute avec if ($this->getUser())

        return $this->render('homepage/homepage.html.twig');
    }
}

