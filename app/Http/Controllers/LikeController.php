<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddLikeRequest;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(AddLikeRequest $request)
    {
        $like = Like::where("post_id",$request->post_id)->where("user_id", $request->user_id)->first();
        if (!$like) {
            $like = Like::create($request->all());
            return $like->id;
        } else {
            $like->delete();
            return ["Лайк удалён"];
        }
    }
}