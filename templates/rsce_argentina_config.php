<?php

##########################################
### Created by S Punkt Online GmbH #######
######## https://www.spo.digital #########
##########################################

return array(
  'label' => array(
    'Team-List: Vor- und Nachname, Position, Bild, Beschreibung',
  ),
  'types' => array( 'content' ),
  'contentCategory' => 'RSCE: Main',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),

  'fields' => array(
    'list' => array(
      'label' => array(
        'de' => array('Team-Mitglied', 'Hier können Sie Mitarbeiter hinzufügen'),
      ),
      'elementLabel' => array(
        'de' => 'Slide %s',
      ),
      'inputType' => 'list',
      'maxItems' => 9,

      'fields' => array(

        ### title ###
        'title' => array(
          'label' => array(
            'de' => array('Vor- und Nachname', 'Hier können Sie Vor- und Nachname hinzufügen'),
          ),
          'inputType' => 'inputUnit',
          'options' => array('h3', 'h4', 'h5', 'h6'),
          'eval' => array('tl_class' => 'w33 clr'),
        ),

        ### text ###
        'role' => array(
          'label' => array(
            'Position',
            'Hier können Sie Position hinzufügen',
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w33'
          ),
        ),
        ### image ###
        'image' => array(
          'label' => array(
            'de' => array('Bild', 'Hier können Sie das Bild auswählen'),
          ),
          'inputType' => 'fileTree',
          'eval' => array(
            'fieldType' => 'radio',
            'filesOnly' => true,
            'extensions' => 'jpg,jpeg,png,gif,svg',
            'tl_class'=>'clr',
            'mandatory' => true,
          ),
        ),

        ### image alt ###
        'image_alt' => array(
          'label' => array(
            'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w33 clr',
            'mandatory' => true,
          ),
        ),

        ### image title ###
        'image_title' => array(
          'label' => array(
            'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w33',
            'mandatory' => true,
          ),
        ),

        ### textarea ###
        'text' => array(
          'label' => array('Beschreibung', 'Hier können Sie den Text hinzufügen'),
          'eval' => array(
            'tl_class' => 'w50 clr'
          ),
          'inputType' => 'textarea',
        ),
      ),
    ),
  ),
);