<?php
/**
 * Class ArticleServiceFactory | ArticleServiceFactory.php
 * @package App\Service\Factory
 * @author  Florian Knapp <office@florianknapp.de>
 */
namespace App\Service\Factory;

use App\Service\ArticleService;
use Faulancer\Service\Config;
use Faulancer\Service\DbService;
use Faulancer\ServiceLocator\FactoryInterface;
use Faulancer\ServiceLocator\ServiceLocatorInterface;

/**
 * Class ArticleServiceFactory
 */
class ArticleServiceFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var DbService $orm */
        $orm = $serviceLocator->get(DbService::class);

        /** @var Config $config */
        $config = $serviceLocator->get(Config::class);

        return new ArticleService($orm, $config);
    }

}