<?php
 // created: 2023-12-03 12:52:05
$layout_defs["bi_defaultDescriptions"]["subpanel_setup"]['bi_requestkinds_bi_defaultdescriptions'] = array (
  'order' => 100,
  'module' => 'bi_requestKinds',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BI_REQUESTKINDS_BI_DEFAULTDESCRIPTIONS_FROM_BI_REQUESTKINDS_TITLE',
  'get_subpanel_data' => 'bi_requestkinds_bi_defaultdescriptions',
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
