<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Media;

class DashboardController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $postsCount = Post::count();
        $mediaCount = Media::count();

        return view('admin.dashboard', compact('usersCount', 'postsCount', 'mediaCount'));
    }
}
