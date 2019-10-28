<?php

use Uniform\Form;

return function ($kirby, $page)
{
    $contactform = new Form([
        'name' => [
            'rules' => ['required'],
            'message' => $page->nameerror(),
        ],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => $page->emailerror(),
        ],
        'phone' => [
            'rules' => ['required'],
            'message' => $page->phoneerror(),
        ],
        'teloderemail' => [],
        'wann' => [],
        'message' => [],
        'impressum' => [
            'rules' => ['required'],
            'message' => $page->impressumerror(),
        ],
    ]);

    if ($kirby->request()->is('POST')) {
        $contactform->honeypotGuard()
        ->MailContactAction();
    }

    return compact('contactform');
};
