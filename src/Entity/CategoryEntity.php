<?php

namespace App\Entity;

use Faulancer\ORM\Entity;

/**
 * @property integer $id
 * @property string $name
 */
class CategoryEntity extends Entity {

    protected static $relations = [
        'articles' => [ArticleEntity::class, ['id' => 'categoryId']]
    ];

    /** @var string */
    protected static $tableName = 'category';

}