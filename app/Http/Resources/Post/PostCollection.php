<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
<<<<<<< HEAD
        return [
            // 'data' => $this->collection, //Not formatted

            'data' => PostResource::collection($this->collection),
            'meta' => [
                'total_post' => $this->collection->count()
            ]
=======
        //mendesain custome objek response attribute baru jika ada banyak objek response yg akan dikelola
        return 
        [
            //memanggil PostCollection untuk dipakai formatnya ke semua data index
             'data' => PostResource::collection($this->collection),
             'meta' => [
                
                'total_post' =>$this->collection->count()
                //menghitung jumlah data yg dipunya, method count() hanya ada di JsonResource, parent dari PostResource karena tidak bisa langsung query disana. cek fungsi lain jika diperlukan
             ]



            // format dibawah error karena attribute title hanya punya PostResource dan tidak dipanggil
            // 'title' => $this->title,
            // 'body' => $this->body,
            // 'stored_at' => $this->created_at->diffForHumans()
>>>>>>> feat/4364914
        ];
    }
}
