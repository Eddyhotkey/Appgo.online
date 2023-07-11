<?php

##########################################
### Created by S Punkt Online GmbH #######
######## https://www.spo.digital #########
##########################################

return array(
  'label' => array(
    'Zweispaltiger Container 3: Text, Slider',
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
    'checkbox_group' => array(
      'label' => array('Erscheinungsbild',
        'Wählen Sie die gewünschten Elemente, die auf der Seite angezeigt werden sollen, und wie sie angezeigt werden sollen'),
      'inputType' => 'group',
    ),

    ### checkbox ###
    'link_chb' => array(
      'label' => array(
        'Link hinzufügen',
        'Einen Link am ende des Elements hinzufügen',
      ),
      'inputType' => 'checkbox',
    ),

    ### checkbox ###
    'position_chb' => array(
      'label' => array(
        'Slider und Text vertauschen',
        'Die standardmäßig Position: Text rechts, Bild links',
      ),
      'inputType' => 'checkbox',
    ),

    ### group ###
    'text_group' => array(
      'label' => array(
        'Beschreibung',
        'Hier können Sie die Beschreibung hinzufügen',
      ),
      'inputType' => 'group',
    ),

    ### textarea ###
    'text' => array(
      'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
      'eval' => array(
        'rte' => 'tinyMCE',
        'tl_class' => 'clr'
      ),
      'inputType' => 'textarea',
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
      'dependsOn' => array(
        'field' => 'link_chb',
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
      'dependsOn' => array(
        'field' => 'link_chb',
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
      'dependsOn' => array(
        'field' => 'link_chb',
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
      'dependsOn' => array(
        'field' => 'link_chb',
      ),
    ),

    'list' => array(
      'label' => array(
        'de' => array('Slider', 'Hier können Sie Bilder hinzufügen'),
      ),
      'elementLabel' => array(
        'de' => 'Slide %s',
      ),
      'inputType' => 'list',
      'maxItems' => 4,

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
      ),
    ),
  ),
);