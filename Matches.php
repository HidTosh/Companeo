<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    public $timestamps = false;

	protected $fillable = ['id', 'home_team_id', 'away_team_id', 'home_score', 'away_score', 'snitch', 'p', 'padj', 'swim', 'event_id', 'event_order' ];

	
	/*//Realtion avec la table teams
	public function teams(){
	return $this->hasMany('App\Teams');
	}

	//Realtion avec la table matches
	public function events(){
	return $this->hasMany('App\Events'); 
	}*/


}

