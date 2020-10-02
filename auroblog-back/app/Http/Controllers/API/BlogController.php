<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $page       = !empty($request->query('page')) ? $request->query('page') : 1;
        $limit      = !empty($request->query('limit')) ? $request->query('limit') : 10;
        return Blog::paginate($limit, ['*'], 'page', $page);
    }

    public function save(Request $request)
    {
        return Blog::create($request->all());
    }

    public function view($slug)
    {
        return Blog::where('slug', $slug)->first();
    }

    public function update(Request $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blog->update($request->all());
        return $blog;
    }

    public function delete(Request $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blog->delete();
        return 204;
    }
}
