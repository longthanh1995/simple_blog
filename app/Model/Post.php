<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'slug', 'body', 'image', 'status', 'like', 'dislike', 'category_id'];
    public function category()
	{
		return $this->belongsTo(Category::class);
	}
    public function tags()
	{
		return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
	}
}
