<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\User;

class ArticleController extends Controller
{
    public function create()
    {
        if (!\Auth::check()) {
            return redirect('/login');
        }

        return view('article');
    }

    public function store()
    {
        if (!\Auth::check()) {
            return redirect('/login');
        }

        $request = request();
        $loggedInUser = $request->user();
        $data = $request->all();

        $article = new Article();
        $article->title = $data['title'];
        $article->content = $data['content'];
        $article->user_id = $loggedInUser->id;
        $article->save();

        return redirect('/');
    }

    public function userArticles($userId)
    {
        $user = User::where('id', $userId)
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

    public function toggleLike($articleId)
    {
        $user = request()->user();
        $article = Article::find($articleId);

        if ($article->isLikedByCurrentUser()) {
            $article->likes()->detach($user);
        } else {
            $article->likes()->attach($user);
        }

        return back()
            ->with('message', 'You successfully liked an article.');
    }
}
