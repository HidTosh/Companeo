<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    public $timestamps = false;

	protected $fillable = ['name', 'event_start_date', 'event_end_date'];

		/*//relation avec la table themes 
		public function events(){
			return $this->belongsTo('App\Matches');  
		}*/

}
