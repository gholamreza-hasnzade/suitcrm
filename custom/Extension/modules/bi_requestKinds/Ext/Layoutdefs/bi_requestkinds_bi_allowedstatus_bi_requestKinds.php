<?php
 // created: 2023-12-03 12:52:05
$layout_defs["bi_requestKinds"]["subpanel_setup"]['bi_requestkinds_bi_allowedstatus'] = array (
  'order' => 100,
  'module' => 'bi_allowedStatus',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BI_REQUESTKINDS_BI_ALLOWEDSTATUS_FROM_BI_ALLOWEDSTATUS_TITLE',
  'get_subpanel_data' => 'bi_requestkinds_bi_allowedstatus',
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
