<?php
// created: 2023-12-03 12:52:08
$dictionary["bi_requestkindsgroup_bi_allowedstatus"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bi_requestkindsgroup_bi_allowedstatus' => 
    array (
      'lhs_module' => 'bi_requestKindsGroup',
      'lhs_table' => 'bi_requestkindsgroup',
      'lhs_key' => 'id',
      'rhs_module' => 'bi_allowedStatus',
      'rhs_table' => 'bi_allowedstatus',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bi_requestkindsgroup_bi_allowedstatus_c',
      'join_key_lhs' => 'bi_requestkindsgroup_bi_allowedstatusbi_requestkindsgroup_ida',
      'join_key_rhs' => 'bi_requestkindsgroup_bi_allowedstatusbi_allowedstatus_idb',
    ),
  ),
  'table' => 'bi_requestkindsgroup_bi_allowedstatus_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'bi_requestkindsgroup_bi_allowedstatusbi_requestkindsgroup_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bi_requestkindsgroup_bi_allowedstatusbi_allowedstatus_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bi_requestkindsgroup_bi_allowedstatusspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bi_requestkindsgroup_bi_allowedstatus_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bi_requestkindsgroup_bi_allowedstatusbi_requestkindsgroup_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bi_requestkindsgroup_bi_allowedstatus_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bi_requestkindsgroup_bi_allowedstatusbi_allowedstatus_idb',
      ),
    ),
  ),
);