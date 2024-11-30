<?php

namespace Application\Controllers;
use application\model\Article as ArticleModel;
use application\model\Category as CategoryModel;
class Home extends Controller{

    public function index(){
        $category = new CategoryModel();
        $categories = $category->all();
        $article = new ArticleModel();
        $articles = $article->all();
        return $this->View('app.index', compact('categories', 'articles'));

    }

    public function category($id){
        $ob_category = new CategoryModel();
        $categories = $ob_category->all();
        $ob_category = new CategoryModel();
        $category = $ob_category->find($id);
        $ob_category = new CategoryModel();
         $article = $ob_category->article($id);
         return $this->View('app.category', compact('categories', 'article','category'));

    }
    
    public function show($id){
        $category = new CategoryModel();
        $categories = $category->all();
        $ob_article = new ArticleModel();
        $article = $ob_article->find($id);
        return $this->View('app.detail', compact('article','categories'));

    }


}
