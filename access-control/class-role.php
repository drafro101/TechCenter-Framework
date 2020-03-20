<?php

class Role {

  public $id

  public $name;

  public $permissions;

  public function __construct( $id, $name) {}

  public function __construct( $id, $name, $permissions ) {}

  public function add_permissions( $permissions ) {}

  public function drop_permissions( $permissions ) {}

  public function has_permission( $permission ) {}

  public function delete() {}

}
