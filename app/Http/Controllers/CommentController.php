<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;
use App\User;

class CommentController extends Controller
{
    // public function create()
    // {
    //     if (!\Auth::check()) {
    //         return redirect('/login');
    //     }
    //
    //     return view('article');
    // }

    public function store()
    {
        if (!\Auth::check()) {
            return redirect('/login');
        }

        $request = request();
        $loggedInUser = $request->user();
        $data = $request->all();
        // $article = Article::find($id);
        // var_dump($article);

        $comment = new Comment();
        $comment->content = $data['content'];
        $comment->user_id = $loggedInUser->id;
        $comment->article_id = $data['articleId'];
        $comment->save();

        return redirect('/');
    }

    public function userArticles($userId)
    {
        $user = User::when('id', $userId)
            ->first();

        if (!$user) {
            abort(404);
        }

        $articles = $user->articles;

        return view('userArticles', [
            'user' => $user,
            'articles' => $articles
        ]);
    }

    public function articleComments($userId)
    {
        $user = User::when('id', $userId)
            ->first();

        if (!$user) {
            abort(404);
        }

        $comments = $article->comments;

        return view('articleComments', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
}
