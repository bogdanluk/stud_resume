<?php

namespace App\Http\Controllers;

use App\Models\NewsPosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    public function index()
    {
        $news = NewsPosts::query();
        $posts = $news->orderBy('created_at', 'desc')->paginate(5);
        return view('newspage', ['posts' => $posts]);
    }

    public function open_post($id)
    {
        $post = NewsPosts::find($id);
        if($post) {
            return view('post', ["post" => $post]);
        } else {
            return redirect()->route('404');
        }
    }

    public function adminNewsList()
    {
        $news = NewsPosts::query();
        $result = $news->orderBy('created_at', 'desc')->paginate(20);
        #возврат страницы со списком постов
        return view('administrator.news-list', ['news'=>$result]);
    }

    public function createNews(Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'content' => 'required|string',
            'image' => 'file|max:5120'
        ]);

        #сохранение файлов в публичное хранилище
        $image = null;
        if(isset($data['image'])){
            $image = Storage::disk('public')->putFile('/news_img', $data['image']);
        }

        #добавление резюме в базу
        $news = NewsPosts::create([
            'name' => $data['name'],
            'content' => $data['content'],
            'image' => $image,
        ]);

        return redirect()->route('admin.news-list')->with(['message' => __('messages.news_added')]);
    }

    public function updateNewsForm($id){
        $post = NewsPosts::find($id);

        return view('administrator.edit-news', [
            'post' => $post,
        ]);
    }

    public function updateNews(Request $request, $id){
        $data = $request->validate([
            'name' => 'string|min:3|max:255',
            'content' => 'string',
            'image' => 'file|max:5120'
        ]);


        if(isset($data['image'])){
            $data['image'] = Storage::disk('public')->putFile('/news_img', $data['image']);
        }

        $news = NewsPosts::find($id);
        $news->update($data);

        return redirect()->route('admin.news-list')->with(['message' => __('messages.news_edited')]);
    }

    public function deleteNews($id){
        $post = NewsPosts::find($id);
        #удаление файлов из хранилища
        Storage::disk('public')->delete($post->image);
        $post->delete();

        return back()->with(['message' => __('messages.news_deleted')]);
    }
}
