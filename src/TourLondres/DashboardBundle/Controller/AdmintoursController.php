<?php

namespace TourLondres\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use TourLondres\DashboardBundle\Entity\Tour;

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
     * @Template("TourLondresDashboardBundle:Admintours:edit.html.twig")
     */
    public function addAction(Request $request )
    {
        $tour = new Tour();
        $form = $this->createFormBuilder($tour)
            ->add('esname', 'text', array( 'label' => 'Nombre del Tour' ))
            ->add('esdescription', 'text', array( 'label' => 'Breve descripcion' ))
            ->add('esbody', 'textarea', array( 'label' => 'Texto completo' ))
            ->add('esday', 'text', array( 'label' => 'Dia de la semana' ))
            ->add('esplace', 'text', array( 'label' => 'Lugar de encuentro' ))
            ->add('enname', 'text', array( 'label' => 'Nombre del Tour' ))
            ->add('endescription', 'text', array( 'label' => 'Breve descripcion' ))
            ->add('enbody', 'textarea', array( 'label' => 'Texto completo' ))
            ->add('esday', 'text', array( 'label' => 'Dia de la semana' ))
            ->add('esplace', 'text', array( 'label' => 'Lugar de encuentro' ))
            ->add('type', 'choice', array('choices' => array( 'privado' => 'Privado', 'semanal' => 'Semanal'), 'label' => 'Tipo de Tour' ))
            ->add('time', 'text', array( 'label' => 'Hora' ))
            ->add('submit', 'button')
            ->getForm();

        // $form->handleRequest($request);
        return array('form' => $form->createView());
    }

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
