<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index() {
        $videos = Video::latest()->get();
        return view("pages.videos" ,compact("videos"));
    }

    public function create(){
        return view("pages.addVideo");
    }

    public function show(int $id){
        $video = Video::findOrFail($id);

        return view("pages.video", compact("video"));
    }

    public function store(VideoRequest $request){
        $imgName = Carbon::now()->timestamp .'patrickngoy.' . $request->file('video_name')->extension();
        $path = $request->file("video_name")->storeAs('uploads/videos',$imgName,'public');

        Video::create(
            [
                "title" => $request->title,
                "video_name" => $imgName,
                "description" => $request->description
            ]
            );

            return redirect()->route("dashboard");
    }

    public function delete(int $id){
        Video::destroy($id);

        return redirect()->back();
    }


}
