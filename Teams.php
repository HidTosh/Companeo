<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{

	public $timestamps = false;
	
    protected $fillable = ['id', 'name'];


		/*//relation avec la table themes 
		public function matches(){
			return $this->belongsTo('App\Matches');  
		}*/
}
