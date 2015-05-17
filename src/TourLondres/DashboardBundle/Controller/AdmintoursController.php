<?php

namespace TourLondres\DashboardBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
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

        $toursNav = 'active';
        return array('tours' => $tours, 'toursNav' => $toursNav );
    }

    /**
     * @Route("/admin/tour/add")
     * @Template("TourLondresDashboardBundle:Admintours:edit.html.twig")
     */
    public function addAction(Request $request)
    {
        $tour = new Tour();
        $form = $this->createFormBuilder($tour)
            ->add('banner', 'entity', array('class' => 'TourLondres\DashboardBundle\Entity\Banner', 'data_class' => null, 'expanded' => false, 'multiple' => false))
            ->add('esname', 'text', array( 'label' => 'Nombre del Tour' ))
            ->add('esnav', 'text', array( 'label' => 'Nombre en Menu' ))
            ->add('ennav', 'text', array( 'label' => 'Name in Nav' ))
            ->add('esdescription', 'text', array( 'label' => 'Breve descripcion' ))
            ->add('esbody', 'textarea', array( 'label' => 'Texto completo'))
            ->add('esday', 'text', array( 'label' => 'Dia de la semana' ))
            ->add('esplace', 'text', array( 'label' => 'Lugar de encuentro' ))
            ->add('enname', 'text', array( 'label' => 'Tour Name' ))
            ->add('endescription', 'text', array( 'label' => 'Brief Description' ))
            ->add('enbody', 'textarea', array( 'label' => 'Text' ))
            ->add('enday', 'text', array( 'label' => 'Day of the week'  ))
            ->add('enplace', 'text', array( 'label' => 'Meeting point' ))
            ->add('estype', 'choice', array('choices' => array( 'privado' => 'Privado', 'semanal' => 'Privado y Semanal'), 'label' => 'Tipo de Tour' ))
            ->add('estime', 'text', array( 'label' => 'Hora' ))
            ->add('entime', 'text', array( 'label' => 'Time'  ))
            ->add('submit', 'submit', array('attr' => array('class' => 'btn-primary pull-right')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($tour);
            $em->flush();

            $this->addFlash(
            'notice',
            '"' . $tour->getEsname() . '" se añadió correctamente.'
            );

            return $this->redirectToRoute('tourlondres_dashboard_admintours_list');
        }

        $toursNav = 'active';
        return array('form' => $form->createView(), 'toursNav' => $toursNav );
    }

    /**
     * @Route("/admin/tour/edit/{id}")
     * @Template()
     * @ParamConverter("tour",  class="TourLondres\DashboardBundle\Entity\Tour")
     */
    public function editAction(Request $request, Tour $tour)
    {
        $form = $this->createFormBuilder($tour)
            ->add('banner', 'entity', array('class' => 'TourLondres\DashboardBundle\Entity\Banner', 'data_class' => null, 'expanded' => false, 'multiple' => false))
            ->add('esname', 'text', array( 'label' => 'Nombre del Tour' ))
            ->add('esnav', 'text', array( 'label' => 'Nombre en Menu' ))
            ->add('ennav', 'text', array( 'label' => 'Name in Nav' ))
            ->add('esdescription', 'text', array( 'label' => 'Breve descripcion' ))
            ->add('esbody', 'textarea', array( 'label' => 'Texto completo'))
            ->add('esday', 'text', array( 'label' => 'Dia de la semana' ))
            ->add('esplace', 'text', array( 'label' => 'Lugar de encuentro' ))
            ->add('enname', 'text', array( 'label' => 'Tour Name' ))
            ->add('endescription', 'text', array( 'label' => 'Brief Description' ))
            ->add('enbody', 'textarea', array( 'label' => 'Text' ))
            ->add('enday', 'text', array( 'label' => 'Day of the week' ))
            ->add('enplace', 'text', array( 'label' => 'Meeting point'  ))
            ->add('estype', 'choice', array('choices' => array( 'privado' => 'Privado', 'semanal' => 'Privado y Semanal'), 'label' => 'Tipo de Tour' ))    
            ->add('estime', 'text', array( 'label' => 'Hora' ))
            ->add('entime', 'text', array( 'label' => 'Time' ))
            ->add('submit', 'submit', array('attr' => array('class' => 'btn-primary pull-right')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($tour);
            $em->flush();

            $this->addFlash(
            'notice',
            '"' . $tour->getEsname() . '" se modificó correctamente.'
            );

            return $this->redirectToRoute('tourlondres_dashboard_admintours_list');
        }

        $toursNav = 'active';
        return array('form' => $form->createView(), 'toursNav' => $toursNav );   
    }

    /**
     * @Route("/admin/tour/available/{id}")
     * @Template()
     * @ParamConverter("tour",  class="TourLondres\DashboardBundle\Entity\Tour")
     */
    public function availableAction(Request $request, Tour $tour)
    {

        $available = $tour->getAvailable();
        
        if( $available == true ) {
            $tour->setAvailable(false);
            $message= ' se deshabilitó correctamente';
        }else {
            $tour->setAvailable(true);
            $message= ' se publicó correctamente';
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($tour);
        $em->flush();

        $this->addFlash(
        'notice',
        '"' . $tour->getEsname() . $message . '"'
        );

        return $this->redirectToRoute('tourlondres_dashboard_admintours_list');

    }

    /**
     * @Route("/admin/tour/remove/{id}")
     * @Template()
     * @ParamConverter("tour",  class="TourLondres\DashboardBundle\Entity\Tour")
     */
    public function deleteAction(Request $request, Tour $tour)
    {
        $name = $tour->getEsname();

        $em = $this->getDoctrine()->getManager();
        $em->remove($tour);
        $em->flush();

        $this->addFlash(
        'notice',
        '"' . $tour->getEsname()  . ' borrado definitivamente"'
        );

        return $this->redirectToRoute('tourlondres_dashboard_admintours_list');

    }

}
