<?php

namespace TourLondres\DashboardBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function adminMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Administrar Tours', array('route' => 'tourlondres_dashboard_admintours_list'));
        $menu->addChild('Precios Tours Privados', array('route' => 'tourlondres_dashboard_preciostour_edit', 'routeParameters' => array('id' => 1)));
        $menu->addChild('Tours Privados', array('route' => 'tourlondres_dashboard_about_privados', 'routeParameters' => array('id' => 1)));
        $menu->addChild('Rutas Semanales', array('route' => 'tourlondres_dashboard_about_semanales', 'routeParameters' => array('id' => 1)));
        $menu->addChild('Traslados', array('route' => 'tourlondres_dashboard_banner_list'));
        $menu->addChild('Precios Traslados', array('route' => 'tourlondres_dashboard_banner_list'));
        $menu->addChild('Quienes Somos', array('route' => 'tourlondres_dashboard_banner_list'));
        $menu->addChild('Administrar Banners', array('route' => 'tourlondres_dashboard_banner_list'));
        
       
        return $menu;
    }
}