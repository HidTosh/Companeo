<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;

use App\Http\Requests;

use App\Teams;

class TeamsController extends Controller
{
    	public function index(Request $request)
		{
			$Teams = Teams::get();
			return view('Teams.teams', compact('Teams'));		
		}

		public function store(TeamRequest $request)
		{
			$Teams = Teams::create($request->all());	
			return redirect(action('TeamsController@index')); 
		}

		public function show($id)
		{
			$Teams = Teams::findOrFail($id);
		   	return $Teams;
		}

		public function edit($id)
		{
			$Teams = Teams::findOrFail($id);
    		return view('Teams.edit',  compact('Teams'));
		}

		public function update($id, Request $request)
		{
			$Teams = Teams::findOrFail($id);
			$Teams->update($request->all());
//				   	return $Teams;
			return redirect(action('TeamsController@index'));
		}

		public function destroy($id)
		{
			$Teams = Teams::findOrFail($id);
			$Teams->destroy($id); 
			return redirect(action('TeamsController@index'));
		}
}
