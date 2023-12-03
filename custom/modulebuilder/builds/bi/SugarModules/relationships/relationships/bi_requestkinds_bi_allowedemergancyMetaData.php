<?php
// created: 2023-12-03 12:52:05
$dictionary["bi_requestkinds_bi_allowedemergancy"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bi_requestkinds_bi_allowedemergancy' => 
    array (
      'lhs_module' => 'bi_requestKinds',
      'lhs_table' => 'bi_requestkinds',
      'lhs_key' => 'id',
      'rhs_module' => 'bi_allowedEmergancy',
      'rhs_table' => 'bi_allowedemergancy',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bi_requestkinds_bi_allowedemergancy_c',
      'join_key_lhs' => 'bi_requestkinds_bi_allowedemergancybi_requestkinds_ida',
      'join_key_rhs' => 'bi_requestkinds_bi_allowedemergancybi_allowedemergancy_idb',
    ),
  ),
  'table' => 'bi_requestkinds_bi_allowedemergancy_c',
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
      'name' => 'bi_requestkinds_bi_allowedemergancybi_requestkinds_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bi_requestkinds_bi_allowedemergancybi_allowedemergancy_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bi_requestkinds_bi_allowedemergancyspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bi_requestkinds_bi_allowedemergancy_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bi_requestkinds_bi_allowedemergancybi_requestkinds_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bi_requestkinds_bi_allowedemergancy_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bi_requestkinds_bi_allowedemergancybi_allowedemergancy_idb',
      ),
    ),
  ),
);