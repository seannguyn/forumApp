<?php

namespace App\Http\Controllers;

use App\User;
use App\Model\Reply;
use App\Model\Question;
use App\Model\Category;
use App\Model\Like;

use Illuminate\Http\Request;
use App\Http\Resources\LikeResource;
use App\Http\Resources\ReplyResource;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{

  public function index()
  {
    return LikeResource::collection(Like::get());

  }

  public function likeIt($id)
  {

    $like = Like::create([
      'user_id' => 1,
      'replies_id' => $id
    ]);

    return new LikeResource($like);
  }

  public function unLikeit($id)
  {
    Like::where('user_id',1)->delete();
    return response('DELETED',Response::HTTP_OK);
  }


}
