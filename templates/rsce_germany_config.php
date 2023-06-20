<?php

##########################################
### Created by S Punkt Online GmbH #######
######## https://www.spo.digital #########
##########################################

return array(
  'label' => array(
    'Header-Motiv: Bild, Titel, Text, Link',
  ),
  'types' => array( 'content' ),
  'contentCategory' => 'RSCE: Header',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'headline', 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),


  'fields' => array(
    ### group ###
    'image_group' => array(
      'label' => array('BILD ', 'Hier können Sie ein Bild hinzufügen'),
      'inputType' => 'group',
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

    ### image size checkbox ###
    'image_size_checkbox' => array(
      'label' => array(
        'de' => array('Bildgröße', 'Bildgröße selbst festlegen'),
      ),
      'inputType' => 'checkbox',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### image size ###
    'image_size' => array(
      'label' => array(
        'de' => array('Bildgröße', 'Hier können Sie die Abmessungen des Bildes und den Skalierungsmodus festlegen.'),
      ),
      'inputType' => 'imageSize',
      'options' => \System::getImageSizes(),
      'eval' => array('tl_class' => 'w50 clr'),
      'dependsOn' => [
        'field' => 'image_size_checkbox',
      ],
    ),

    ### image alt ###
    'image_alt' => array(
      'label' => array(
        'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array(
        'tl_class' => 'w25 clr',
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
        'tl_class' => 'w25',
        'mandatory' => true,
      ),
    ),

    ### group ###
    'text_group' => array(
      'label' => array(
        'Beschreibung',
        'Hier können Sie eine Beschreibung hinzufügen',
      ),
      'inputType' => 'group',
    ),

    ### text ###
    'text' => array(
      'label' => array(
        'Beschreibung',
        'Hier können Sie eine Beschreibung hinzufügen'
      ),
      'inputType' => 'textarea',
      'eval' => array(
        'rte' => 'tinyMCE',
        'tl_class' => 'w50',
      ),
    ),

    ### group ###
    'link_group' => array(
      'label' => array(
        'Link',
        'Hier können Sie einen Link hinzufügen',
      ),
      'inputType' => 'group',
    ),

    ### link ###
    'link' => array(
      'label' => array(
        'Link',
        'Hier können Sie einen link auswählen',
      ),
      'inputType' => 'url',
      'eval' => array(
        'tl_class' => 'w33',
        'mandatory' => true,
      ),
    ),
    ### text ###
    'link_text' => array(
      'label' => array(
        'Link-Text',
        'Hier können Sie einen Text für den Link eingeben',
      ),
      'inputType' => 'text',
      'eval' => array(
        'tl_class' => 'w33',
        'mandatory' => true,
      ),
    ),

    ### text ###
    'link_title' => array(
      'label' => array(
        'Link Title',
        'Hier können Sie einen Titel für den Link eingeben',
      ),
      'inputType' => 'text',
      'eval' => array(
        'tl_class' => 'w33 clr',
        'mandatory' => true,
      ),
    ),
    ### text ###
    'link_aria_label' => array(
      'label' => array(
        'Aria-Label',
        'Hier können Sie ein Aria-Label für den Link eingeben',
      ),
      'inputType' => 'text',
      'eval' => array(
        'tl_class' => 'w33',
        'mandatory' => true,
      ),
    ),
  ),
);