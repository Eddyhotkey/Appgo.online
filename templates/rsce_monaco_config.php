<?php

##########################################
### Created by S Punkt Online GmbH #######
######## https://www.spo.digital #########
##########################################

return array(
  'label' => array(
    'FAQ: Akkordeon, Unterschrift, Text',
  ),
  'types' => array( 'content' ),
  'contentCategory' => 'RSCE: FAQ',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'headline', 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),

  'fields' => array(
    ### group ###
    'border_group' => array(
      'label' => array('Randfarbe',
        'Bitte wählen Sie eine passendere Farbe'),
      'inputType' => 'group',
    ),

    ### colorpicker ###
    'border' => array(
      'label' => array('Randfarbe individuell festlegen', 'leer für Standardfarbe'),
      'inputType' => 'text',
      'eval' => array(
        'colorpicker' => true,
        'tl_class' => 'wizard w25',
      ),
    ),

    ### list ###
    'list' => array(
      'label' => array(
        'de' => array('FAQ-Liste', 'Hier können Sie Fragen und Antworten hinzufügen'),
      ),
      'elementLabel' => array(
        'de' => 'FAQ-Item %s',
      ),
      'inputType' => 'list',
      'maxItems' => 9,

      'fields' => array(

        ### title ###
        'title' => array(
          'label' => array(
            'de' => array('Überschrift', 'Hier können Sie die Überschrift hinzufügen'),
          ),
          'inputType' => 'inputUnit',
          'options' => array('h3', 'h4', 'h5', 'h6'),
          'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### tinyMCE ###
        'textarea' => array(
          'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
          'eval' => array(
            'rte' => 'tinyMCE',
            'tl_class' => 'w50 clr'
          ),
          'inputType' => 'textarea',
        ),
      ),
    ),
  ),
);