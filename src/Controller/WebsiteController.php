<?php

namespace App\Controller;

use App\Entity\ArticleEntity;
use App\Entity\CategoryEntity;
use App\Service\ArticleService;
use Faulancer\Controller\Controller;
use Faulancer\Session\SessionManager;

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
    public function contactAction()
    {
        $this->setDefaultAssets();
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

        /** @type ArticleEntity $article */
        $article = $this->getDb()->fetch(ArticleEntity::class, $id);

        // Set read count
        $article->read = $article->read + 1;
        $article->save();

        return $this->render('/site/article.phtml', ['article' => $article]);
    }

    /**
     * @return string
     */
    public function categoriesAction()
    {
        $this->setDefaultAssets();

        $categories = $this->getDb()->fetch(CategoryEntity::class)->all();

        return $this->render('/site/categories.phtml', ['categories' => $categories]);
    }

    /**
     * @param integer $id
     * @return string
     */
    public function categoryAction($id)
    {
        $this->setDefaultAssets();

        $category = $this->getDb()->fetch(CategoryEntity::class, $id);
        $articles = $this->getDb()->fetch(ArticleEntity::class)->where('categoryId', '=', $id)->all();

        return $this->render('/site/category.phtml', ['articles' => $articles, 'category' => $category]);
    }

    public function userLoginAction()
    {
        $this->setDefaultAssets();

        return $this->render('/user/login.phtml');
    }

    public function userLogoutAction()
    {
        $this->setDefaultAssets();

        $this->getSessionManager()->delete('user');

        $this->redirect('/');
    }

    /**
     * @return void
     */
    private function setDefaultAssets()
    {
        $this->getView()->addScript('/js/namespace.js');
        $this->getView()->addScript('/js/slide.js');
        $this->getView()->addStylesheet('/css/main.css');

    }

}