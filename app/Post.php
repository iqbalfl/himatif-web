<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // A post can have 1 author
	public function author() {
	    return $this->belongsTo('App\User','author_id');
	}

	// A post can have 1 categories
	public function category() {
	    return $this->belongsTo('App\Category','category_id');
	}

	// custom scope untuk menampilkan post terbaru
    public function scopeLatestPosts($query)
	{
		return $this->select('title','slug','image','created_at')->where('status','PUBLISHED')->orderBy('created_at');
	}
}
