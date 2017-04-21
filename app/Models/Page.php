<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

	public function pageContents()
	{
		return $this->hasMany('App\Models\PageContent');
	}
}
