<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\V1\PostResource;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::latest()->paginate());
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }

    public function destroy (Post $post)
    {
        $post->delete();
        return response()->json("ID:$post->id Eliminada", ResponseAlias::HTTP_ACCEPTED);
    }
}
