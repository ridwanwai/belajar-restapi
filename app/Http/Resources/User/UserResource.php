<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email
=======
        return
        [
            'name' => $this->name,
            'email' => $this->email
            // oper data ke PostResource
>>>>>>> feat/4364914
        ];
    }
}
