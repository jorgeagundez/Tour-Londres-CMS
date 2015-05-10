<?php

namespace TourLondres\DashboardBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BannerControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/banner/add');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/banner/list');
    }

}
