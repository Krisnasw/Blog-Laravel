<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'tb_category';

    protected $fillable = array('category','type');


    public function blog() {
		return $this->belongsToMany('App\Blog', 'tb_relation_blog', 'id_category', 'id_relasi');
	}
}
