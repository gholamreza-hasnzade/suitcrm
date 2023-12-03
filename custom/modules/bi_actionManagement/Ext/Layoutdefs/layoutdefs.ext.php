<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2023-12-03 12:51:57
$layout_defs["bi_actionManagement"]["subpanel_setup"]['bi_actionmanagement_bi_defaultdescriptions'] = array (
  'order' => 100,
  'module' => 'bi_defaultDescriptions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BI_ACTIONMANAGEMENT_BI_DEFAULTDESCRIPTIONS_FROM_BI_DEFAULTDESCRIPTIONS_TITLE',
  'get_subpanel_data' => 'bi_actionmanagement_bi_defaultdescriptions',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2023-12-03 12:51:57
$layout_defs["bi_actionManagement"]["subpanel_setup"]['bi_actionmanagement_users'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BI_ACTIONMANAGEMENT_USERS_FROM_USERS_TITLE',
  'get_subpanel_data' => 'bi_actionmanagement_users',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>