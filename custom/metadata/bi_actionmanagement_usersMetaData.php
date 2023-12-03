<?php
// created: 2023-12-03 12:51:57
$dictionary["bi_actionmanagement_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bi_actionmanagement_users' => 
    array (
      'lhs_module' => 'bi_actionManagement',
      'lhs_table' => 'bi_actionmanagement',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bi_actionmanagement_users_c',
      'join_key_lhs' => 'bi_actionmanagement_usersbi_actionmanagement_ida',
      'join_key_rhs' => 'bi_actionmanagement_usersusers_idb',
    ),
  ),
  'table' => 'bi_actionmanagement_users_c',
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
      'name' => 'bi_actionmanagement_usersbi_actionmanagement_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bi_actionmanagement_usersusers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bi_actionmanagement_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bi_actionmanagement_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bi_actionmanagement_usersbi_actionmanagement_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bi_actionmanagement_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bi_actionmanagement_usersusers_idb',
      ),
    ),
  ),
);