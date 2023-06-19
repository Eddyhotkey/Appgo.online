<?php

##########################################
### Created by S Punkt Online GmbH #######
######## https://www.spo.digital #########
##########################################

return array(
  'label' => array(
    'de' => array('Mobile Navigation: Inhalte', ''),
  ),
  'types' => array('module'),
  'moduleCategory' => 'RSCE Module',
  'beTemplate' => 'be_wildcard',
  'wrapper' => array(
    'type' => 'none',
  ),

  'fields' => array(
    ### group ###
    'logo_group' => array(
      'label' => array(
        'Bild',
        'Hier können Sie das Bild auswählen',
      ),
      'inputType' => 'group',
    ),

    ### image ###
    'logo' => array(
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
    'logo_alt' => array(
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
    'logo_title' => array(
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

    ### link ###
    'logo_link' => array(
      'label' => array(
        'Link',
        'Hier können Sie einen link auswählen',
      ),
      'inputType' => 'url',
      'eval' => array(
        'tl_class' => 'w33 clr',
        'mandatory' => true,
      ),
    ),

    ### text ###
    'logo_link_title' => array(
      'label' => array(
        'Link Title',
        'Hier können Sie einen Titel für den Link eingeben',
      ),
      'inputType' => 'text',
      'eval' => array(
        'tl_class' => 'w33',
        'mandatory' => true,
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
        'Link Text',
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
        'tl_class' => 'w33',
        'mandatory' => true,
      ),
    ),
  ),
);