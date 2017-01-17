<?php

namespace App\Entity;

use Faulancer\ORM\Entity;

/**
 * @property integer $id
 * @property string $created
 * @property string $updated
 * @property ArticleEntity $articles
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 */
class UserEntity extends Entity {

    protected static $relations = [
        'articles' => [ArticleEntity::class, ['id' => 'user']]
    ];

    /** @var string */
    protected static $tableName = 'user';

}