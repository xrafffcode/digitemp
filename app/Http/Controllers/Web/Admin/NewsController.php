<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->get();

        return view('pages.admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string|unique:news',
            'content' => 'required|string',
            'thumbnail' => 'required|image',
        ]);

        News::create($request->all());

        Swal::toast('Berhasil menambahkan berita', 'success');

        return redirect()->route('admin.berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::findOrFail($id);

        return view('pages.admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::findOrFail($id);

        return view('pages.admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string|unique:news,slug,' . $id,
            'content' => 'required|string',
            'thumbnail' => 'nullable|image',
        ]);

        $news = News::findOrFail($id);

        $news->update($request->all());

        Swal::toast('Berhasil mengubah berita', 'success');

        return redirect()->route('admin.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);

        $news->delete();

        Swal::toast('Berhasil menghapus berita', 'success');

        return redirect()->route('admin.berita.index');
    }
}
