<?php

class PodcastCrawlerTest extends TestCase
{
    public function testGetByName()
    {
        $response = $this->call('GET', '/list', ['name' => 'nerdcast']);

        $this->assertEquals(200, $response->status());
    }

    public function testGetByNameWithLimit()
    {
        $response = $this->call('GET', '/list', ['name' => 'nerdcast', 'limit' => 4]);

        $data = $response->original;

        $this->assertEquals(200, $response->status());
        $this->assertEquals(4, $data['result_count']);
        $this->assertCount(4, $data['podcasts']);
    }
}
