<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Site;
use App\Models\Service;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    public function news_dashboard()
    {
        $news = News::with(['category', 'user'])->get();
        return view('dashboard.admin.news.news', [
            'title' => 'Daftar berita',
            'description' => 'Di halaman ini berisi kumpulan berita yang telah dibuat',
            'news' => $news,
        ]);
    }

    public function news_delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->back()->with('success', 'Berita berhasil dihapus');
    }

    public function news_create()
    {
        $categories = Category::all();
        return view('dashboard.admin.news.news_create', [
            'title' => 'Buat berita',
            'description' => 'Di halaman ini berisi form untuk membuat berita',
            'categories' => $categories,
        ]);
    }

    public function news_create_action(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
            'category' => 'required',
        ]);

        $news = new News;
        $news->slug = Str::slug($request->title);
        $news->title = $request->title;

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $rand = now()->getTimestamp()." ";
            $file->move(public_path('uploads/news'), $rand.$file->getClientOriginalName());
            $fileName = '/uploads/news/' . $rand.$file->getClientOriginalName();
        }

        $news->thumbnail = $fileName;
        $news->content = $request->content;
        $news->description = strip_tags(Str::words($request->content, 20));
        $news->user_id = Auth::user()->id;
        $news->category_id = $request->category;
        if($request->submit == "publish") {
            $news->status = 'published';
        } else {
            $news->status = 'draft';
        }
        $news->save();

        return redirect("/admin/news")->with('success', 'Berita berhasil dibuat');
    }

    public function news_update($id)
    {
        $categories = Category::all();
        $news = News::find($id);
        return view('dashboard.admin.news.news_update', [
            'news' => $news,
            'title' => 'Ubah berita',
            'description' => 'Di halaman ini berisi form untuk mengubah berita '.$news->title,
            'categories' => $categories,
        ]);
    }

    public function news_update_action(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
            'category' => 'required',
        ]);

        $news = News::find($id);
        $news->slug = Str::slug($request->title);
        $news->title = $request->title;

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $rand = now()->getTimestamp()." ";
            $file->move(public_path('uploads/news'), $rand.$file->getClientOriginalName());
            $fileName = '/uploads/news/' . $rand.$file->getClientOriginalName();
            $news->thumbnail = $fileName;
        }

        $news->content = $request->content;
        $news->description = strip_tags(Str::words($request->content, 20));
        $news->user_id = Auth::user()->id;
        $news->category_id = $request->category;
        if($request->submit == "publish") {
            $news->status = 'published';
        } else {
            $news->status = 'draft';
        }
        $news->save();

        return redirect("/admin/news")->with('success', 'Berita berhasil diubah');
    }

    public function read($slug)
    {
        $site = Site::first();
        $news = News::where('slug', $slug)->with(['category','user'])->first();
        return view('landingpage.news', [
            'title' => $news->title,
            'description' => $news->description,
            'news' => $news,
            "site" => $site,
            "services" => Service::all(),
        ]);
    }

    public function news_list()
    {
        $news = News::with(['category', 'user'])->where('status', 'published')->get();
        $site = Site::first();
        return view('landingpage.news_list', [
            'title' => 'Daftar berita',
            'description' => 'Di halaman ini berisi kumpulan berita yang telah dibuat',
            'news' => $news,
            "site" => $site,
            "services" => Service::all(),
        ]);
    }
}
