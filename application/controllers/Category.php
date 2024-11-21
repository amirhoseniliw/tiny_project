<?php 
namespace Application\Controllers;
use application\model\Article as ArticleModel;
use application\model\Category as CategoryModel;
class Category extends Controller{
    public function index(){
        $category = new CategoryModel();
        $categories = $category->all();
        $article = new ArticleModel();
        $articles = $article->all();
        return $this->View('panel.article.index', compact('categories','articles'));
    }
    public function create(){

    }
    public function store(){

    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update($id){

    }
    public function destroy($id){

    }
}