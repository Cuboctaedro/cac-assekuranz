<?php

return function($site, $pages, $page) {

    $query   = get('searchform');
    $results = $site->search($query, 'title|body');

    return [
        'query'   => $query,
        'results' => $results,
    ];

};
