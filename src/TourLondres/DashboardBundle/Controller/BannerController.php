<?php

namespace TourLondres\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use TourLondres\DashboardBundle\Entity\Banner;

class BannerController extends Controller
{

    /**
     * @Route("/admin/banner/list")
     * @Template()
     */
    public function listAction(Request $resquest)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $banners = $em->getRepository('TourLondresDashboardBundle:Banner')->findAll();

        $bannersNav = 'active';
        return array('banners' => $banners, 'bannersNav' => $bannersNav );    
    }

    /**
     * @Route("/admin/banner/add")
     * @Template()
     */
    public function addAction(Request $request)
    {

        $banner = new Banner();
        $form = $this->createFormBuilder($banner)
            ->add('file', 'text', array( 'label' => 'Nombre del archivo' ))
            ->add('submit', 'submit', array('attr' => array('class' => 'btn-primary pull-right')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($banner);
            $em->flush();

            $this->addFlash(
            'notice',
            'El nuevo banner se añadió correctamente.'
            );

            return $this->redirectToRoute('tourlondres_dashboard_banner_list');
        }

        $bannersNav = 'active';
        return array('form' => $form->createView(), 'bannersNav' => $bannersNav );    
    }

}
