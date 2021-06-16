<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_SalesOrder extends Model
{
    protected $guarded = ['id'];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function sales()
    {
    	return $this->belongsTo(SalesOrder::class);
    }
}
