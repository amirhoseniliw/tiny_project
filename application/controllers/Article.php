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
        // $article = new ArticleModel();
        // $articles = $article->insert();
    }
    public function show($id) {
        $article = new ArticleModel();
        $articles = $article->find($id);
        return $this->View('panel.article.show', compact('articles'));
    }
    public function edit($id) {
        $article = new ArticleModel();
        $articles = $article->find($id);
        return $this->View('panel.article.edit', compact('articles'));
    }
    public function update($id) {}
    public function destroy($id) {}
}
