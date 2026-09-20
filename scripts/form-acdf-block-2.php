<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Vom Kontaktformular',
    'email_message' => 'Du hast eine neue Nachricht vom Kontaktformular',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'kontakt@computerralle.de',
    'to' => 'kontakt@computerralle.de',
    'toCopy' => '',
    'toHiddenCopy' => ''
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'E-Mail',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'E-Mail\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Adresse',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Adresse\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>