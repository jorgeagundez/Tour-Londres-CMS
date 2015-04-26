<?php

namespace TourLondres\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class AdmintoursController extends Controller
{
    /**
     * @Route("/admin/tour/list")
     * @Template()
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $tours = $em->getRepository('TourLondresDashboardBundle:Tour')->findAll();

        return array('tours' => $tours);
    }

    /**
     * @Route("/admin/tour/add")
     * @Template()
     */
    public function addAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/admin/tour/edit/{id}")
     * @Template()
     */
    public function editAction($id)
    {
        return array(
                // ...
            );    }

}
