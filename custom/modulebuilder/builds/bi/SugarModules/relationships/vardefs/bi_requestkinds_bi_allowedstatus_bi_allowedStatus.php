<?php
// created: 2023-12-03 12:52:06
$dictionary["bi_allowedStatus"]["fields"]["bi_requestkinds_bi_allowedstatus"] = array (
  'name' => 'bi_requestkinds_bi_allowedstatus',
  'type' => 'link',
  'relationship' => 'bi_requestkinds_bi_allowedstatus',
  'source' => 'non-db',
  'module' => 'bi_requestKinds',
  'bean_name' => false,
  'vname' => 'LBL_BI_REQUESTKINDS_BI_ALLOWEDSTATUS_FROM_BI_REQUESTKINDS_TITLE',
  'id_name' => 'bi_requestkinds_bi_allowedstatusbi_requestkinds_ida',
);
$dictionary["bi_allowedStatus"]["fields"]["bi_requestkinds_bi_allowedstatus_name"] = array (
  'name' => 'bi_requestkinds_bi_allowedstatus_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BI_REQUESTKINDS_BI_ALLOWEDSTATUS_FROM_BI_REQUESTKINDS_TITLE',
  'save' => true,
  'id_name' => 'bi_requestkinds_bi_allowedstatusbi_requestkinds_ida',
  'link' => 'bi_requestkinds_bi_allowedstatus',
  'table' => 'bi_requestkinds',
  'module' => 'bi_requestKinds',
  'rname' => 'name',
);
$dictionary["bi_allowedStatus"]["fields"]["bi_requestkinds_bi_allowedstatusbi_requestkinds_ida"] = array (
  'name' => 'bi_requestkinds_bi_allowedstatusbi_requestkinds_ida',
  'type' => 'link',
  'relationship' => 'bi_requestkinds_bi_allowedstatus',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BI_REQUESTKINDS_BI_ALLOWEDSTATUS_FROM_BI_ALLOWEDSTATUS_TITLE',
);
