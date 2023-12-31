<?php

##########################################
### Created by S Punkt Online GmbH #######
######## https://www.spo.digital #########
##########################################

return array(
  'label' => array(
    'Merkmale-Liste:, Titel, Pop-up-Text',
  ),
  'types' => array( 'content' ),
  'contentCategory' => 'RSCE: Main',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),


  'fields' => array(

    ### list ###
    'list' => array(
      'label' => array(
        'de' => array('Merkmale-Liste', 'Hier können Sie Überschriften und Teaser-Texte hinzufügen'),
      ),
      'elementLabel' => array(
        'de' => 'Merkmal %s',
      ),
      'inputType' => 'list',

      'minItems' => 1,
      'maxItems' => 12,

      'fields' => array(

        ### group ###
        'title_group' => array(
          'label' => array(
            'Titel',
            'Hier können Sie den Titel eingeben',
          ),
          'inputType' => 'group',
        ),

        ### title ###
        'title' => array(
          'label' => array(
            'de' => array('Überschrift', 'Hier können Sie die Überschrift hinzufügen'),
          ),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### group ###
        'text_group' => array(
          'label' => array(
            'Beschreibung',
            'Hier können Sie die Beschreibung hinzufügen',
          ),
          'inputType' => 'group',
        ),

        ### test ###
        'text' => array(
          'label' => array(
            'Text',
            'Hier können Sie den Text hinzufügen',
          ),
          'inputType' => 'textarea',
          'eval' => array(
            'tl_class' => 'w50',
          ),
        ),
      ),
    ),

    ### group ###
    'link_group' => array(
      'label' => array(
        'Link',
        'Hier können Sie einen link auswählen',
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
