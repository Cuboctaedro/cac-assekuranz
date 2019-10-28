<?php

return function($site, $pages, $page) {

    $query   = get('searchform');
    $results = $site->search($query, 'title|text');

    return [
        'query'   => $query,
        'results' => $results,
    ];

};
