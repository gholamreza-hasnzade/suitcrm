<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2023-12-03 12:51:59
$dictionary["User"]["fields"]["bi_actionmanagement_users"] = array (
  'name' => 'bi_actionmanagement_users',
  'type' => 'link',
  'relationship' => 'bi_actionmanagement_users',
  'source' => 'non-db',
  'module' => 'bi_actionManagement',
  'bean_name' => false,
  'vname' => 'LBL_BI_ACTIONMANAGEMENT_USERS_FROM_BI_ACTIONMANAGEMENT_TITLE',
  'id_name' => 'bi_actionmanagement_usersbi_actionmanagement_ida',
);
$dictionary["User"]["fields"]["bi_actionmanagement_users_name"] = array (
  'name' => 'bi_actionmanagement_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BI_ACTIONMANAGEMENT_USERS_FROM_BI_ACTIONMANAGEMENT_TITLE',
  'save' => true,
  'id_name' => 'bi_actionmanagement_usersbi_actionmanagement_ida',
  'link' => 'bi_actionmanagement_users',
  'table' => 'bi_actionmanagement',
  'module' => 'bi_actionManagement',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["bi_actionmanagement_usersbi_actionmanagement_ida"] = array (
  'name' => 'bi_actionmanagement_usersbi_actionmanagement_ida',
  'type' => 'link',
  'relationship' => 'bi_actionmanagement_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BI_ACTIONMANAGEMENT_USERS_FROM_USERS_TITLE',
);

?>