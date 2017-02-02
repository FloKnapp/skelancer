<?php

namespace App\Entity;

use Faulancer\ORM\User\Entity;

/**
 * @property integer $id
 * @property string $created
 * @property string $updated
 * @property ArticleEntity $articles
 */
class UserEntity extends Entity {

    /** @var string */
    protected static $tableName = 'user';

}