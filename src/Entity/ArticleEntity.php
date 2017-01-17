<?php

namespace App\Entity;

use Faulancer\ORM\Entity;

/**
 * @property integer $id
 * @property string $created
 * @property string $updated
 * @property CategoryEntity $category
 * @property UserEntity $author
 * @property string $title
 * @property string $text
 * @property integer $read
 */
class ArticleEntity extends Entity {

    protected static $relations = [
        'category' => [CategoryEntity::class, ['categoryId' => 'id']],
        'author'   => [UserEntity::class, ['userId' => 'id']]
    ];

    /** @var string */
    protected static $tableName = 'article';

}