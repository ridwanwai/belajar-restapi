<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //menyembunyikan suatu atribut dari user
    protected $guarded = [];
<<<<<<< HEAD
    protected $hidden = ['created_at', 'updated_at'];
    protected $appends = ['stored_at'];

=======
    protected $hidden = ['created_at','updated_at']; // attribut yg disembunyikan
    protected $appends = ['stored_at']; // digantikan untuk tampil attribute lain
    
    //membuat tampilan attribute baru
>>>>>>> feat/4364914
    public function getStoredAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
