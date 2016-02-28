<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'tb_blog';

    protected $fillable = array('title', 'article','image');


    public function category() {
		return $this->belongsToMany('App\Category', 'tb_relation_blog', 'id_relasi', 'id_category');
	}

}
