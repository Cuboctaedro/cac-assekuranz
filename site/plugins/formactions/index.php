<?php

namespace Uniform\Actions;

use Kirby\Cms\App;

class MailContactAction extends Action {

    public function perform() {
        $kirby = kirby();
        $data = $this->form->data();

        try {
            $kirby->email([
                'subject' => 'Contact form',
                'template' => 'contact',
                'from'    => env('SENDER_MAIL'),
                'to'      => env('RECEIVER_MAIL'),
                'data' => [
                    'data' => $this->form->data()
                ]
            ]);
        } catch (Exception $error) {
            echo $error;
        }
    }
}

class MailTerminAction extends Action {

    public function perform() {
        $kirby = kirby();
        $data = $this->form->data();

        try {
            $kirby->email([
                'subject' => 'Contact form',
                'template' => 'termin',
                'from'    => env('SENDER_MAIL'),
                'to'      => env('RECEIVER_MAIL'),
                'data' => [
                    'data' => $this->form->data()
                ]
            ]);
        } catch (Exception $error) {
            echo $error;
        }
    }
}
