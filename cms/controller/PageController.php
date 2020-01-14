<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 5/1/20
 * Time: 1:28 AM
 */
class PageController extends Controller
{
    public function create(){
        $page = new Pages();
        if($_POST){
            $page->create($_POST['slug'], $_POST['description']);
            $this->redirect('page.php?url='.$_POST['slug']);
        }
        $this->view('createPage', 'Create Page');
    }

    public function edit($slug){
        $page = new Pages();
        $edit = $page->page($slug);
        if($_POST){
            $page->edit($_POST['slug'], $_POST['description'], $edit['id']);
            $this->redirect('page.php?url='.$_POST['slug']);
        }
        $this->view('editPage', 'Edite Page', [
            'edit' => $edit
        ]);
    }

    public function destroy($id){
        $page = new Pages();
        $page->destroy($id);
        $this->redirect('index.php');
    }

}