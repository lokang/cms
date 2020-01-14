<?php
class PostController extends Controller
{
    public function get($id){
        $post = new Posts();
        $comment = new Comments();
        $comments = $comment->getAll($id);
        $postData = $post->get($id);
        if($_POST){
            $comment->create($this->auth['id'], $id, $_POST['comment']);
            $this->redirect('post.php?id='.$id.'#comment');
        }
        $this->view('post', 'post', [
            'postData' => $postData,
            'comments' => $comments
        ]);
    }

    public function update($id){
        $post = new Posts();
        $postData = $post->get($id);
        if($_POST){
            $post->update($_POST['title'], $_POST['description'], $id);
            $this->redirect('post.php?id='.$id);
        }
        $this->view('update', 'update', [
            'postData' => $postData
        ]);
    }

    public function destroy($id){
        $post = new Posts();
        $destroy = $post->destroy($id);
        $this->redirect('/');
    }

    public function create(){
        if($_POST){
            $post = new Posts();
            $post->create($this->auth['id'], $_POST['title'], $_POST['description']);
            $this->redirect('/');
        }
        $this->view('createPost', 'create post');
    }
}