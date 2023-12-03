<?php
// created: 2023-12-03 12:52:05
$dictionary["bi_requestkinds_bi_defaultdescriptions"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'bi_requestkinds_bi_defaultdescriptions' => 
    array (
      'lhs_module' => 'bi_requestKinds',
      'lhs_table' => 'bi_requestkinds',
      'lhs_key' => 'id',
      'rhs_module' => 'bi_defaultDescriptions',
      'rhs_table' => 'bi_defaultdescriptions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bi_requestkinds_bi_defaultdescriptions_c',
      'join_key_lhs' => 'bi_requestkinds_bi_defaultdescriptionsbi_requestkinds_ida',
      'join_key_rhs' => 'bi_requestkinds_bi_defaultdescriptionsbi_defaultdescriptions_idb',
    ),
  ),
  'table' => 'bi_requestkinds_bi_defaultdescriptions_c',
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
      'name' => 'bi_requestkinds_bi_defaultdescriptionsbi_requestkinds_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bi_requestkinds_bi_defaultdescriptionsbi_defaultdescriptions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bi_requestkinds_bi_defaultdescriptionsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bi_requestkinds_bi_defaultdescriptions_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bi_requestkinds_bi_defaultdescriptionsbi_requestkinds_ida',
        1 => 'bi_requestkinds_bi_defaultdescriptionsbi_defaultdescriptions_idb',
      ),
    ),
  ),
);