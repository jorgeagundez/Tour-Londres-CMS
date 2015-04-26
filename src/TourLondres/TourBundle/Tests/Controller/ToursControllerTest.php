<?php

namespace TourLondres\TourBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ToursControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tour/list');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tour/{name}');
    }

    public function testNav()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/list/nav');
    }

}
