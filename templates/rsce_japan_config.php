<?php

##########################################
### Created by S Punkt Online GmbH #######
######## https://www.spo.digital #########
##########################################

return array(
  'label' => array(
    'Akkordeon-Liste: Teaser-Text, Titel, Beschreibung',
  ),
  'types' => array( 'content' ),
  'contentCategory' => 'RSCE: Main',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),

  'fields' => array(
    ### group ###
    'background_group' => array(
      'label' => array('Hintergrundfarbe',
        'Bitte wählen Sie eine passendere Farbe'),
      'inputType' => 'group',
    ),

    'background' => array(
      'label' => array('Hintergrundfarbe individuell festlegen', 'leer für Standardfarbe'),
      'inputType' => 'text',
      'eval' => array(
        'colorpicker' => true,
        'tl_class' => 'wizard w25',
      ),
    ),

    ### group ###
    'border_group' => array(
      'label' => array('Randfarbe',
        'Bitte wählen Sie eine passendere Farbe'),
      'inputType' => 'group',
    ),

    'border' => array(
      'label' => array('Randfarbe individuell festlegen', 'leer für Standardfarbe'),
      'inputType' => 'text',
      'eval' => array(
        'colorpicker' => true,
        'tl_class' => 'wizard w25',
      ),
    ),

    'list' => array(
      'label' => array(
        'de' => array('Merkmale-Liste', 'Hier können Sie Icons und Teaser-Texte hinzufügen'),
      ),
      'elementLabel' => array(
        'de' => 'Item %s',
      ),
      'inputType' => 'list',

      'fields' => array(

        ### text ###
        'text' => array(
          'label' => array(
            'de' => array('Text', ''),
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w50 clr',
          ),
        ),

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