<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model {
	protected $table = 'student';

	protected $fillable = ['id', 'name', 'address'];
	public $timestamps = false;
}
