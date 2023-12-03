<?php
$module_name = 'bi_actionManagement';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        'LBL_EDITVIEW_PANEL2' => 
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
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'activefor',
            'studio' => 'visible',
            'label' => 'LBL_ACTIVEFOR',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'defaultdescription',
            'studio' => 'visible',
            'label' => 'LBL_DEFAULTDESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'relateform',
            'studio' => 'visible',
            'label' => 'LBL_RELATEFORM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'active_for_users',
            'studio' => 'visible',
            'label' => 'LBL_ACTIVE_FOR_USERS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'relatedworkflow',
            'studio' => 'visible',
            'label' => 'LBL_RELATEDWORKFLOW',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'code',
            'label' => 'LBL_CODE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
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
