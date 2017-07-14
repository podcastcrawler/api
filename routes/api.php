<?php

$app->get('/list', ['as' => 'index', 'uses' => 'PodcastCrawlerController@index']);
