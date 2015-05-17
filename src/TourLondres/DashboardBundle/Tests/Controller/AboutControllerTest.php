<?php

namespace TourLondres\DashboardBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AboutControllerTest extends WebTestCase
{
    public function testPrivados()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/about/tour-privates/{id}');
    }

    public function testSemanales()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/about/tour-weekly/{id}');
    }

    public function testTraslados()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/about/transfers/{id}');
    }

    public function testQuienes()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/about/who-we/{id}');
    }

}
