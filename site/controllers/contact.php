<?php

return function($site, $pages, $page) {
    $form = uniform('contact-form', [
        'required' => [
            'name'  => '',
            '_from' => 'email'
        ],
        'actions' => [
            [
                '_action' => 'email',
                'to'      => 'style@polgarcia.com',
                'sender'  => 'style@polgarcia.com',
                'subject' => 'Contact with Pol Garcia'
            ]
        ]
    ]);

    return compact('form');
};
