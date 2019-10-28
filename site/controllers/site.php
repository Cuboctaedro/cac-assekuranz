<?php

use Uniform\Form;

return function ($kirby, $site)
{
    $terminform = new Form([
        'name' => [
            'rules' => ['required'],
            'message' => $site->nameerror(),
        ],
        'phone' => [
            'rules' => ['required'],
            'message' => $site->phoneerror(),
        ],
        'wann' => [],
        'message' => [],
        'impressum' => [
            'rules' => ['required'],
            'message' => $site->impressumerror(),
        ],
    ]);

    if ($kirby->request()->is('POST')) {
        $terminform->honeypotGuard()
        ->MailTerminAction();
    }

    return compact('terminform');
};
