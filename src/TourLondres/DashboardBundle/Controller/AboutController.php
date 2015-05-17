<?php

namespace TourLondres\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use TourLondres\DashboardBundle\Entity\About;

class AboutController extends Controller
{
    /**
     * @Route("/admin/about-tour-privates/edit/{id}")
     * @ParamConverter("about",  class="TourLondres\DashboardBundle\Entity\About")
     * @Template()
     */
    public function privadosAction(Request $request, About $about)
    {
        $form = $this->createFormBuilder($about)
        ->add('estextoPrivados', 'textarea', array( 'label' => 'Texto en Español' ))
        ->add('entextoPrivados', 'textarea', array( 'label' => 'Texto en Inglés' ))
        ->add('submit', 'submit', array('attr' => array('class' => 'editar btn-primary pull-right')))
        ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($about);
            $em->flush();

            $this->addFlash(
            'notice',
            '"El texto "En que consisten" de Tours Privados se actualizaron correctamente."'
            );

            return $this->redirectToRoute('tourlondres_dashboard_about_privados', array('id' => 1));
        }

       
        return array('form' => $form->createView() );    
     
    }

    /**
     * @Route("/admin/about-tour-weekly/edit/{id}")
     * @ParamConverter("about",  class="TourLondres\DashboardBundle\Entity\About")
     * @Template()
     */
    public function semanalesAction(Request $request, About $about)
    {
        $form = $this->createFormBuilder($about)
        ->add('estextoSemanales', 'textarea', array( 'label' => 'Texto en Español' ))
        ->add('entextoSemanales', 'textarea', array( 'label' => 'Texto en Inglés' ))
        ->add('submit', 'submit', array('attr' => array('class' => 'editar btn-primary pull-right')))
        ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($about);
            $em->flush();

            $this->addFlash(
            'notice',
            '"El texto "En que consisten" de Tours Semanales se actualizaron correctamente."'
            );

            return $this->redirectToRoute('tourlondres_dashboard_about_semanales', array('id' => 1));
        }

       
        return array('form' => $form->createView() );
    }

    /**
     * @Route("/admin/about-transfers/edit/{id}")
     * @Template()
     */
    public function trasladosAction($id)
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/admin/about-who-we/edit/{id}")
     * @Template()
     */
    public function quienesAction($id)
    {
        return array(
                // ...
            );    }

}
