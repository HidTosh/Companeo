<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matches;

class MatchesController extends Controller
{
    	public function index(Request $request)
		{
			$Matches = Matches::get();
			return view('Matches.index', compact('Matches'));		
		}

		public function store(Request $request)
		{
			$Matches = Matches::create($request->all());	
			return redirect(action('EventsController@index')); 
		}

		public function show($id)
		{
			$Matches = Matches::findOrFail($id);
		   	return $Matches;
		}




}
