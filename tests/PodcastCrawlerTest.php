<?php

class PodcastCrawlerTest extends TestCase
{
    public function testFindByUrl()
    {
        $response = $this->call('GET', '/find', ['url' => 'http://www.nerdoutwithme.com/feed/podcast']);

        $data = $response->original;

        $this->assertEquals(200, $response->status());
        $this->assertArrayHasKey('title', $data);
        $this->assertArrayHasKey('description', $data);
        $this->assertArrayHasKey('image', $data);
        $this->assertArrayHasKey('site', $data);
        $this->assertArrayHasKey('language', $data);
        $this->assertArrayHasKey('episodes_total', $data);
        $this->assertArrayHasKey('episodes', $data);
    }

    public function testGetByName()
    {
        $response = $this->call('GET', '/list', ['name' => 'nerdcast']);

        $data = $response->original;

        $this->assertEquals(200, $response->status());
        $this->assertGreaterThanOrEqual(1, count($data['result_count']));
        $this->assertGreaterThanOrEqual(1, count($data['podcasts']));
    }

    public function testGetByNameWithLimit()
    {
        $response = $this->call('GET', '/list', ['name' => 'ouvo', 'limit' => 4]);

        $data = $response->original;

        $this->assertEquals(200, $response->status());
        $this->assertLessThanOrEqual(4, $data['result_count']);
        $this->assertLessThanOrEqual(4, count($data['podcasts']));
    }

    public function testGetByNameNotFound()
    {
        $response = $this->call('GET', '/list', ['name' => 'gjkhjgk']);

        $data = $response->original;

        $this->assertEquals(404, $response->status());
        $this->assertEquals(0, $data['result_count']);
    }
}
