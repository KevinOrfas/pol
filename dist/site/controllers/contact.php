<?php

return function($site, $pages, $page) {
  $form = uniform(
      'contact-form',
      array(
          'required' => array(
              '_from' => 'email'
          ),
          'actions' => array(
              array(
                  '_action' => 'email',
                  'to'      => (string) $page->email(),
                  'sender'  => 'info@localhost.tld',
                  'subject' => $site->title()->html() . ' - message from the contact form'
              )
          )
      )
  );
  return compact('form');
};
