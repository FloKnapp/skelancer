<?php

namespace App\Entity;

use Faulancer\ORM\Entity;

/**
 * @property integer $user_id
 * @property integer $role_id
 */
class UserroleEntity extends Entity {

    /** @var string */
    protected static $tableName = 'userrole';

}