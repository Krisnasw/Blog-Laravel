<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $table = 'tb_portfolio';

    protected $fillable = array('title', 'article','image','slug','link','date');


    public function category() {
		return $this->belongsToMany('App\Category', 'tb_relation_portfolio', 'id_relasi', 'id_category');
	}
}
