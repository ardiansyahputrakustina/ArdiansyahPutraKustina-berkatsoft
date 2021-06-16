<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
	protected $guaded = ['id'];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function detail()
	{
		return $this->hasMany(Detail_SalesOrder::class);
	}
}
