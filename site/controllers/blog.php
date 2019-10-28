<?php

use Uniform\Form;

return function ($kirby, $page)
{
    $terminform = new Form([
        'name' => [
            'rules' => ['required'],
            'message' => 'Name is required',
        ],
        'phone' => [
            'rules' => ['required'],
            'message' => 'Phone is required',
        ],
        'wann' => [],
        'message' => [],
        'impressum' => [
            'rules' => ['required'],
            'message' => 'You should agree with our data policy',
        ],
    ]);

    if ($kirby->request()->is('POST')) {
        $terminform->honeypotGuard()
        ->MailTerminAction();
    }

    $articles = $page->children()->sortBy('date', 'desc');
    $pagetitle = $page->title();
    $articles   = $articles->paginate(10);
    $pagination = $articles->pagination();


    return compact('articles', 'pagination', 'terminform', 'pagetitle');
};
