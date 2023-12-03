<?php
$module_name = 'bi_requestKinds';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'codes',
            'label' => 'LBL_CODES',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'groupkind',
            'studio' => 'visible',
            'label' => 'LBL_GROUPKIND',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'correspondingcode',
            'label' => 'LBL_CORRESPONDINGCODE',
          ),
          1 => 
          array (
            'name' => 'correspondingtitle',
            'label' => 'LBL_CORRESPONDINGTITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'defaultdescription',
            'studio' => 'visible',
            'label' => 'LBL_DEFAULTDESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'tools',
            'studio' => 'visible',
            'label' => 'LBL_TOOLS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'activefor',
            'studio' => 'visible',
            'label' => 'LBL_ACTIVEFOR',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'allowedstatuses',
            'studio' => 'visible',
            'label' => 'LBL_ALLOWEDSTATUSES',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'requesttime',
            'studio' => 'visible',
            'label' => 'LBL_REQUESTTIME',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'authorizedemergencies',
            'studio' => 'visible',
            'label' => 'LBL_AUTHORIZEDEMERGENCIES',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'relatedprocesses',
            'studio' => 'visible',
            'label' => 'LBL_RELATEDPROCESSES',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => '',
        ),
      ),
    ),
  ),
);
;
?>
