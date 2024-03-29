<?php

namespace App\Http\Resources\Post;

<<<<<<< HEAD
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;
=======
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User\UserResource;
>>>>>>> feat/4364914

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
<<<<<<< HEAD
        return [
            'title' => $this->title,
            'body' => $this->body,
            'stored_at' => $this->created_at->diffForHumans(),
            // 'user' => $this->user
            'user' => new UserResource($this->user),
            'comments' => $this->comments
=======
        return
        [
            //mendesain custome objek response attribute baru
            'title' => $this->title,
            'body' => $this->body,
            'stored' => $this->created_at->diffForHumans(),
            //nanti di oper class PostResourece ke class PostController
            //ini hanya berlaku di show 1 data saja,
            //jika mau formatnya untuk semua data index, panggil class PostResource di PostCollection

            //menambahkan relasi data ex: one_to_many
            //'user' => $this->user
            //terkadang ada data yg tidak mau kita tampilkan, maka dapat ditata di Class UserResource
            'user' => new UserResource($this->user)
>>>>>>> feat/4364914
        ];
    }
}
