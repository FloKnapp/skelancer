<?php
/**
 * Class ArticleService | ArticleService.php
 * @package App\Service
 * @author  Florian Knapp <office@florianknapp.de>
 */
namespace App\Service;

use App\Entity\ArticleEntity;
use Faulancer\Service\Config;
use Faulancer\Service\ORM;
use Faulancer\ServiceLocator\ServiceInterface;

/**
 * Class ArticleService
 */
class ArticleService implements ServiceInterface
{

    /** @var ORM */
    protected $orm;

    /** @var  */
    protected $config;

    /**
     * ArticleService constructor.
     * @param ORM    $orm
     * @param Config $config
     */
    public function __construct(ORM $orm, Config $config)
    {
        $this->orm    = $orm;
        $this->config = $config;
    }

    /**
     * @param integer $count
     * @return array
     */
    public function getLastRecentArticles($count = 10)
    {
        return $this->orm
            ->fetch(ArticleEntity::class)
            ->orderBy('created', 'desc')
            ->all($count);
    }

    /**
     * @param int $count
     * @return array
     */
    public function getMostReadArticles($count = 5)
    {
        return $this->orm
            ->fetch(ArticleEntity::class)
            ->orderBy('read', 'desc')
            ->all($count);
    }

}