<?php

##########################################
### Created by S Punkt Online GmbH #######
######## https://www.spo.digital #########
##########################################

return array(
  'label' => array(
    'Referenzen: Slider, Titel',
  ),
  'types' => array( 'content' ),
  'contentCategory' => 'RSCE: Main',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'headline', 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),

  'fields' => array(
    'list' => array(
      'label' => array(
        'de' => array('Slider', 'Hier können Sie Bilder hinzufügen'),
      ),
      'elementLabel' => array(
        'de' => 'Slide %s',
      ),
      'inputType' => 'list',
      'maxItems' => 9,

      'fields' => array(

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

        ### text ###
        'name' => array(
          'label' => array(
            'Vor- und Nachname',
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w33 clr',
          ),
        ),

        ### text ###
        'firm' => array(
          'label' => array(
            'Firma',
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w33',
          ),
        ),

        ### textarea ###
        'text' => array(
          'label' => array('Kommentar', 'Hier können Sie den Text hinzufügen'),
          'eval' => array(
            'tl_class' => 'clr'
          ),
          'inputType' => 'textarea',
        ),
      ),
    ),
  ),
);
