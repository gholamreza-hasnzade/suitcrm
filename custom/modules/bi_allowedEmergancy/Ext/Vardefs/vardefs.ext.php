<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2023-12-03 12:52:07
$dictionary["bi_allowedEmergancy"]["fields"]["bi_requestkinds_bi_allowedemergancy"] = array (
  'name' => 'bi_requestkinds_bi_allowedemergancy',
  'type' => 'link',
  'relationship' => 'bi_requestkinds_bi_allowedemergancy',
  'source' => 'non-db',
  'module' => 'bi_requestKinds',
  'bean_name' => false,
  'vname' => 'LBL_BI_REQUESTKINDS_BI_ALLOWEDEMERGANCY_FROM_BI_REQUESTKINDS_TITLE',
  'id_name' => 'bi_requestkinds_bi_allowedemergancybi_requestkinds_ida',
);
$dictionary["bi_allowedEmergancy"]["fields"]["bi_requestkinds_bi_allowedemergancy_name"] = array (
  'name' => 'bi_requestkinds_bi_allowedemergancy_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BI_REQUESTKINDS_BI_ALLOWEDEMERGANCY_FROM_BI_REQUESTKINDS_TITLE',
  'save' => true,
  'id_name' => 'bi_requestkinds_bi_allowedemergancybi_requestkinds_ida',
  'link' => 'bi_requestkinds_bi_allowedemergancy',
  'table' => 'bi_requestkinds',
  'module' => 'bi_requestKinds',
  'rname' => 'name',
);
$dictionary["bi_allowedEmergancy"]["fields"]["bi_requestkinds_bi_allowedemergancybi_requestkinds_ida"] = array (
  'name' => 'bi_requestkinds_bi_allowedemergancybi_requestkinds_ida',
  'type' => 'link',
  'relationship' => 'bi_requestkinds_bi_allowedemergancy',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BI_REQUESTKINDS_BI_ALLOWEDEMERGANCY_FROM_BI_ALLOWEDEMERGANCY_TITLE',
);

?>