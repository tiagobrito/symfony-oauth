<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SecureController extends Controller
{
    /**
     *
     * @Route("/secure", name="secure")
     */
    public function secure(Request $request)
    {
        return $this->render('secure.html.twig');
    }
}
