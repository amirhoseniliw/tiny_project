<?php

namespace Application\Controllers;

use application\model\Article as ArticleModel;
use application\model\Category as CategoryModel;

class Article extends Controller
{
    public function index()
    {
        $article = new ArticleModel();
        $articles = $article->all();
        return $this->View('panel.article.index', compact('articles'));
    }
    public function create()
    {
        $category = new CategoryModel();
        $categories = $category->all();
        return $this->View('panel.article.create', compact('categories'));
    }
    public function store()
    {
        $article = new ArticleModel();
        $article->insert($_POST);
        return $this->redirect('article');
    }
    // public function show($id) {
       
    // }
    public function edit($id) {
        $category = new CategoryModel();
        $categories = $category->all();
        $ob_article = new ArticleModel();
        $article = $ob_article->find($id);
        return $this->View('panel.article.edit', compact('categories','articles'));
    }
    public function update($id) {
        
        $article = new ArticleModel();
        $article->update($id ,$_POST);
        return $this->redirect('article');
    }
    public function destroy($id) {
        $article = new ArticleModel();
        $article->delete($id);
        return $this->back();    }
}