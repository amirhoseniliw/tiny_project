<?php 
namespace Application\Controllers;
use application\model\Article as ArticleModel;
use application\model\Category as CategoryModel;
class Category extends Controller{
    public function index(){
        $category = new CategoryModel();
        $categories = $category->all();
        return $this->View('panel.category.index', compact('categories'));
    }
    public function create(){
        return $this->View('panel.article.create');
    }
    public function store(){
        $category = new CategoryModel();
        $category->insert($_POST);
        return $this->redirect('category');
    }
    // public function show($id){

    // }
    public function edit($id){
        $category = new CategoryModel();
        $category = $category->find($id);
        return $this->View('panel.article.create');
    }
    public function update($id){
        $category = new CategoryModel();
        $category->update($id ,$_POST);
        return $this->redirect('category');
    }
    public function destroy($id){
        $category = new CategoryModel();
        $category->delete($id);
        return $this->back();  
    }
}