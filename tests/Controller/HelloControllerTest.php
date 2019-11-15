<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function testWorld()
    {
        $client = self::createClient();

        $client->request('GET', '/hello/world');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertContains(
            'Hello World',
            $client->getResponse()->getContent()
        );
    }

    /**
     * @dataProvider provideUrls
     */
    public function testPageIsSuccessful($url)
    {
        $client = self::createClient();
        $client->request('GET', $url);

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function provideUrls()
    {
        return [
            ['/hello/world'],
            ['/hello/foo'],
            ['/hello/bar'],
            // ...
        ];
    }
}
