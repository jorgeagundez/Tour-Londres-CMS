<?php

namespace TourLondres\TourBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ToursController extends Controller
{
    /**
     * @Route("/tour/list")
     * @Template()
     */
    public function listAction($_locale)
    {
        $list = 'tourlist';
        return $this->render('TourLondresTourBundle:Tours:'. $_locale . '_list.html.twig', array('template' => $list));

    }

    /**
     * @Route("/tour/{id}")
     * @Template()
     */
    public function showAction($_locale, $id)
    {
        return $this->render('TourLondresTourBundle:Tours:'. $_locale . '_show.html.twig', array('template' => $id));
    }


}
