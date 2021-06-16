<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function foto()
    {
    	if(!$this->foto)
    	{
    		return asset('');
    	}
    	return asset('images/'.$this->foto);
    }

    public function detail()
    {
    	return $this->hasMany(Detail_SalesOrder::class);
    }
}
