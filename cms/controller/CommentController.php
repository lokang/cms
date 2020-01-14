<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 10/1/20
 * Time: 8:36 PM
 */
class CommentController extends Controller
{
    public function update($id){
        $comment = new Comments();
        $comments = $comment->get($id);
        if($_POST){
            $comment->update($_POST['comment'], $id);
            $this->redirect('post.php?id='.$comments['postId']);
        }
        $this->view('updateComment', 'Update Comment', [
            'comments' => $comments
        ]);
    }

    public function destroy($id){
        $delete = new Comments();
        $deleteComment = $delete->destroy($id);
        $this->back();
    }

}