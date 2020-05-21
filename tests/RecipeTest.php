<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RecipeTest extends WebTestCase
{
	public function testRoutes()
	{
		$client = static::createClient();

		$client->request('GET', '/api/v1/search/food/Quesillo');
		$this->assertEquals(200, $client->getResponse()->getStatusCode());
		$this->assertTrue($client->getResponse()->headers->contains('Content-Type', 'application/json'));

		$content = json_decode($client->getResponse()->getContent());
		$this->assertEquals(true, isset($content[0]->id));
		$this->assertEquals(1, $content[0]->id);
		$this->assertEquals(true, isset($content[0]->name));
		$this->assertEquals('Quesillo venezolano', $content[0]->name);

		$client->request('GET', '/api/v1/search/food/');
		$this->assertEquals(200, $client->getResponse()->getStatusCode());
		$this->assertTrue($client->getResponse()->headers->contains('Content-Type', 'application/json'));

		$content = json_decode($client->getResponse()->getContent());
		$this->assertEquals(3, count($content));
	}
}
