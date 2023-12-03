<?php
$module_name = 'bi_locationArea';
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
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
          0 => 'name',
          1 => 
          array (
            'name' => 'isneighbor',
            'label' => 'LBL_ISNEIGHBOR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'parent',
            'studio' => 'visible',
            'label' => 'LBL_PARENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'telecamunications',
            'label' => 'LBL_TELECAMUNICATIONS',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
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
