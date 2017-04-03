<?php

namespace App\Entity;

use Faulancer\ORM\Entity;

/**
 * @property integer $id
 * @property string $role_name
 * @property string $description
 */
class RoleEntity extends Entity {

    /** @var string */
    protected static $tableName = 'role';

}