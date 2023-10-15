<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $latestPost = Post::latest()->first();
        $popularPost = Post::latest()->inRandomOrder()->first();
        $recentPosts = Post::latest()->limit(4)->get();
        $recentCoupons = Coupon::latest()->limit(8)->get();
        $popularCoupon = Coupon::latest()->first();
        $recentVideos = Video::latest()->limit(8)->get();

        return view("pages.index",compact("latestPost",
                                         "popularPost",
                                         "recentPosts",
                                         "recentCoupons",
                                         "popularCoupon",
                                         "recentVideos"));
    }

    public function dashboard()  {
        $posts = Post::latest()->get();
        $coupons = Coupon::latest()->get();
        $videos = Video::latest()->get();
        return view("dashboard",compact("coupons","posts","videos"));
    }

    public function live(){
        return view("pages.live");
    }
}
