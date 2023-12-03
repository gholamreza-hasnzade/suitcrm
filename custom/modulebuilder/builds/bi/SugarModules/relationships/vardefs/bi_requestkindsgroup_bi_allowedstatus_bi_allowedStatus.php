<?php
// created: 2023-12-03 12:52:09
$dictionary["bi_allowedStatus"]["fields"]["bi_requestkindsgroup_bi_allowedstatus"] = array (
  'name' => 'bi_requestkindsgroup_bi_allowedstatus',
  'type' => 'link',
  'relationship' => 'bi_requestkindsgroup_bi_allowedstatus',
  'source' => 'non-db',
  'module' => 'bi_requestKindsGroup',
  'bean_name' => false,
  'vname' => 'LBL_BI_REQUESTKINDSGROUP_BI_ALLOWEDSTATUS_FROM_BI_REQUESTKINDSGROUP_TITLE',
  'id_name' => 'bi_requestkindsgroup_bi_allowedstatusbi_requestkindsgroup_ida',
);
$dictionary["bi_allowedStatus"]["fields"]["bi_requestkindsgroup_bi_allowedstatus_name"] = array (
  'name' => 'bi_requestkindsgroup_bi_allowedstatus_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BI_REQUESTKINDSGROUP_BI_ALLOWEDSTATUS_FROM_BI_REQUESTKINDSGROUP_TITLE',
  'save' => true,
  'id_name' => 'bi_requestkindsgroup_bi_allowedstatusbi_requestkindsgroup_ida',
  'link' => 'bi_requestkindsgroup_bi_allowedstatus',
  'table' => 'bi_requestkindsgroup',
  'module' => 'bi_requestKindsGroup',
  'rname' => 'name',
);
$dictionary["bi_allowedStatus"]["fields"]["bi_requestkindsgroup_bi_allowedstatusbi_requestkindsgroup_ida"] = array (
  'name' => 'bi_requestkindsgroup_bi_allowedstatusbi_requestkindsgroup_ida',
  'type' => 'link',
  'relationship' => 'bi_requestkindsgroup_bi_allowedstatus',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BI_REQUESTKINDSGROUP_BI_ALLOWEDSTATUS_FROM_BI_ALLOWEDSTATUS_TITLE',
);
