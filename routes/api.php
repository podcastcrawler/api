<?php

$app->get('/list', ['as' => 'index', 'uses' => 'PodcastCrawlerController@index']);
$app->get('/find', ['as' => 'find', 'uses' => 'PodcastCrawlerController@find']);
