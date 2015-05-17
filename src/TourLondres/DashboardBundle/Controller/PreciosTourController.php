<?php

namespace TourLondres\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use TourLondres\DashboardBundle\Entity\PreciosTour;

class PreciosTourController extends Controller
{
    /**
     * @Route("/admin/precios-tour/edit/{id}")
     * @ParamConverter("preciostour",  class="TourLondres\DashboardBundle\Entity\PreciosTour")
     * @Template()
     */
    public function editAction(Request $request, PreciosTour $precios)
    {

    	$form = $this->createFormBuilder($precios)
    	->add('esaa', 'text')
        ->add('esab', 'text')
        ->add('esba', 'text')
        ->add('esbb', 'text')
        ->add('esca', 'text')
        ->add('escb', 'text')
        ->add('esda', 'text')
        ->add('esdb', 'text')
        ->add('esea', 'text')
        ->add('eseb', 'text')
        ->add('enaa', 'text')
        ->add('enab', 'text')
        ->add('enba', 'text')
        ->add('enbb', 'text')
        ->add('enca', 'text')
        ->add('encb', 'text')
        ->add('enda', 'text')
        ->add('endb', 'text')
        ->add('enea', 'text')
        ->add('eneb', 'text')
        ->add('esbody', 'textarea', array( 'label' => 'Texto' ))
        ->add('enbody', 'textarea', array( 'label' => 'Texto' ))
        ->add('Guardar cambios', 'submit', array('attr' => array('class' => 'editar btn-primary pull-right')))
        ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($precios);
            $em->flush();

            $this->addFlash(
            'notice',
            '"Los precios de Tours Privados se modificaron correctamente."'
            );

            return $this->redirectToRoute('tourlondres_dashboard_preciostour_edit', array('id' => 1));
        }

       
        return array('form' => $form->createView() );     
    }

    

}
