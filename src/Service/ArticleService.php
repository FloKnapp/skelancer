<?php
/**
 * Class ArticleService | ArticleService.php
 * @package App\Service
 * @author  Florian Knapp <office@florianknapp.de>
 */
namespace App\Service;

use App\Entity\ArticleEntity;
use Faulancer\Service\Config;
use Faulancer\Service\DbService;
use Faulancer\ServiceLocator\ServiceInterface;

/**
 * Class ArticleService
 */
class ArticleService implements ServiceInterface
{

    /** @var DbService */
    protected $db;

    /** @var  */
    protected $config;

    /**
     * ArticleService constructor.
     * @param DbService $orm
     * @param Config    $config
     */
    public function __construct(DbService $orm, Config $config)
    {
        $this->db     = $orm;
        $this->config = $config;
    }

    /**
     * @param integer $count
     * @return array
     */
    public function getLastRecentArticles($count = 10)
    {
        return $this->db
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
        return $this->db
            ->fetch(ArticleEntity::class)
            ->orderBy('read', 'desc')
            ->all($count);
    }

}