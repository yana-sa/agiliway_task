<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Models\Article;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Show all of the articles for the application.
     *
     * @return \Illuminate\Contracts\View\View
     */

    public function index(): View
    {
        $articles = Article::all();
        return view('home', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->content = $request->content;

        $article->save();
        return redirect('/');
    }

    public function show(Request $request)
    {
        $id = $request->path();
        $article = Article::all()->find($id);
        if(!$article)
        {
            return redirect('/')->withErrors('Requested page not found');
        }
        return view('articles.show', compact('article'));
    }

    public function edit(Request $request)
    {
        $id = basename($request->path());
        $article = Article::all()->find($id);
        if(!$article) {
            return redirect('/')->withErrors('The article was not found');
        }
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request)
    {
        $id = basename($request->path());
        $article = Article::all()->find($id);

       if ($article) {
            $article->title = $request->input('title');
            $article->description = $request->input('description');
            $article->content = $request->input('content');

           $article->update();
       }

        return redirect("/");
    }

        public function destroy(Request $request)
    {
        $id = basename($request->path());
        $article = Article::all()->find($id);
        if($article)
        {
            $article->delete();
            $data['message'] = 'Article deleted successfully';
        }
        else
        {
            $data['errors'] = 'Oops! The article was not found';
        }
        return redirect('/')->with($data);
    }

}
