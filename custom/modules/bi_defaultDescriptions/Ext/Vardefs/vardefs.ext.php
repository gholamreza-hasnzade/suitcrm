<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2023-12-03 12:51:58
$dictionary["bi_defaultDescriptions"]["fields"]["bi_actionmanagement_bi_defaultdescriptions"] = array (
  'name' => 'bi_actionmanagement_bi_defaultdescriptions',
  'type' => 'link',
  'relationship' => 'bi_actionmanagement_bi_defaultdescriptions',
  'source' => 'non-db',
  'module' => 'bi_actionManagement',
  'bean_name' => false,
  'vname' => 'LBL_BI_ACTIONMANAGEMENT_BI_DEFAULTDESCRIPTIONS_FROM_BI_ACTIONMANAGEMENT_TITLE',
  'id_name' => 'bi_actionm3b19agement_ida',
);
$dictionary["bi_defaultDescriptions"]["fields"]["bi_actionmanagement_bi_defaultdescriptions_name"] = array (
  'name' => 'bi_actionmanagement_bi_defaultdescriptions_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BI_ACTIONMANAGEMENT_BI_DEFAULTDESCRIPTIONS_FROM_BI_ACTIONMANAGEMENT_TITLE',
  'save' => true,
  'id_name' => 'bi_actionm3b19agement_ida',
  'link' => 'bi_actionmanagement_bi_defaultdescriptions',
  'table' => 'bi_actionmanagement',
  'module' => 'bi_actionManagement',
  'rname' => 'name',
);
$dictionary["bi_defaultDescriptions"]["fields"]["bi_actionm3b19agement_ida"] = array (
  'name' => 'bi_actionm3b19agement_ida',
  'type' => 'link',
  'relationship' => 'bi_actionmanagement_bi_defaultdescriptions',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BI_ACTIONMANAGEMENT_BI_DEFAULTDESCRIPTIONS_FROM_BI_DEFAULTDESCRIPTIONS_TITLE',
);


// created: 2023-12-03 12:52:05
$dictionary["bi_defaultDescriptions"]["fields"]["bi_requestkinds_bi_defaultdescriptions"] = array (
  'name' => 'bi_requestkinds_bi_defaultdescriptions',
  'type' => 'link',
  'relationship' => 'bi_requestkinds_bi_defaultdescriptions',
  'source' => 'non-db',
  'module' => 'bi_requestKinds',
  'bean_name' => false,
  'vname' => 'LBL_BI_REQUESTKINDS_BI_DEFAULTDESCRIPTIONS_FROM_BI_REQUESTKINDS_TITLE',
);

?>