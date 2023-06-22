<?php

##########################################
### Created by S Punkt Online GmbH #######
######## https://www.spo.digital #########
##########################################

return array(
  'label' => array(
    'Merkmale-Liste: icon, text',
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
        'de' => array('Merkmale-Liste', 'Hier können Sie Icons und Teaser-Texte hinzufügen'),
      ),
      'elementLabel' => array(
        'de' => 'Merkmal %s',
      ),
      'inputType' => 'list',

      'fields' => array(
        ### group ###
        'icon_group' => array(
          'label' => array(
            'Bild',
            'Hier können Sie das Bild auswählen',
          ),
          'inputType' => 'group',
        ),
        ### image ###
        'icon' => array(
          'label' => array(
            'Bild',
            'Hier können Sie das Bild auswählen',
          ),
          'inputType' => 'fileTree',
          'eval' => array(
            'fileType' => 'radio',
            'filesOnly' => 'true',
            'extensions' => 'svg',
            'tl_class' => 'clr',
            'mandatory' => true,
          ),
        ),
        ### text ###
        'icon_alt' => array(
          'label' => array(
            'Alt-Attribute',
            'Hier können Sie einen Alt-Attribute für das Bild eingeben',
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w33 clr',
            'mandatory' => true,
          ),
        ),
        ### text ###
        'icon_title' => array(
          'label' => array(
            'Bildtitel',
            'Hier können Sie den Titel des Bildes eingeben (title_attribut)',
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w33',
            'mandatory' => true,
          ),
        ),
        ### group ###
        'textarea_group' => array(
          'label' => array(
            'Beschreibung',
            'Hier können Sie die Beschreibung hinzufügen'
          ),
          'inputType' => 'group',
        ),
        ### textarea ###
        'textarea' => array(
          'label' => array(
            'Beschreibung',
            'Hier können Sie die Beschreibung hinzufügen'),
          'inputType' => 'textarea',
          'eval' => array(
            'tl_class' => 'w50',
          ),
        ),
      ),
    ),
  ),
);