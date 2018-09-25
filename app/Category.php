<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{
    // relation categories
    public function posts() {
        return $this->hasMany('App\Post');
    }

    /**
	* Get all post id from active category
	*/
	public function getRelatedPostsIdAttribute()
	{
		$result = $this->posts->pluck('id')->toArray();			
		return $result;
	}

    // custom scope untuk menampilkan kategori tanpa parrent
    public function scopeNoParent($query)
	{
		return $this->where('parent_id', null);
	}

	// custom accessor untuk total post dengan kategori terkait
	public function getTotalPostsAttribute()
	{
		return Post::whereIn('id', $this->related_posts_id)->count();
	}
}
