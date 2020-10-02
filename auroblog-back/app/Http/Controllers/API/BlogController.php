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
}
