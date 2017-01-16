<?php

namespace App\Controller;

use App\Entity\ArticleEntity;
use App\Service\ArticleService;
use Faulancer\Controller\Controller;

/**
 * Class WebsiteController
 * @package App\Controller
 */
class WebsiteController extends Controller
{

    /**
     * @return string
     */
    public function indexAction()
    {
        $this->setDefaultAssets();

        /** @var ArticleService $articleService */
        $articleService = $this->getServiceLocator()->get(ArticleService::class);


        $recentArticles   = $articleService->getLastRecentArticles();
        $mostReadArticles = $articleService->getMostReadArticles();

        return $this->render('/site/landingpage.phtml', [
            'recentArticles' => $recentArticles, 'mostReadArticles' => $mostReadArticles
        ]);
    }

    /**
     * @return string
     */
    public function testAction($var)
    {
        $this->setDefaultAssets();

        echo $var;

        return $this->render('/site/test.phtml');
    }

    /**
     * @return string
     */
    public function contactAction()
    {
        $this->setDefaultAssets();
        $this->getView()->addScript('/js/namespace.js');
        $this->getView()->addScript('/js/forms.js');

        return $this->render('/site/contact/contact.phtml');
    }

    /**
     * @param $id
     * @return string
     */
    public function articleAction($id)
    {
        $this->setDefaultAssets();

        /** @var ArticleEntity $article */
        $article = $this->getDb()->fetch(ArticleEntity::class, $id);

        // Set read count
        $article->read = $article->read + 1;
        $article->save();

        return $this->render('/site/article.phtml', ['article' => $article]);
    }

    /**
     * @return void
     */
    private function setDefaultAssets()
    {
        $this->getView()->addStylesheet('/css/main.css');
    }

}