<?php

$app->get('/', ['as' => 'documentation', 'uses' => 'PodcastCrawlerController@documentation']);
$app->get('/list', ['as' => 'index', 'uses' => 'PodcastCrawlerController@index']);
$app->get('/find', ['as' => 'find', 'uses' => 'PodcastCrawlerController@find']);
