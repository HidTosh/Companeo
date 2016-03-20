<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Events;

class EventsController extends Controller
{
    
   	public function index(Request $request)
		{
			//protected $fillable = ['id', 'name', 'event_start_date', 'event_end_date'];
			$Events = Events::get();
			return view('Events.index', compact('Events'));		
		}

		public function store(Request $request)
		{
			$Events = Events::create($request->all());	
			return redirect(action('EventsController@index')); 
		}

		public function show($id)
		{
			$Events = Events::findOrFail($id);
		   	return $Events;
		}

		public function edit($id)
		{
			$Events = Events::findOrFail($id);
    		return view('Events.edit',  compact('Events'));
		}

		public function update($id, Request $request)
		{
			$Events = Events::findOrFail($id);
			$Events->update($request->all());
//				   	return $Teams;
			return redirect(action('EventsController@index'));
		}

		public function destroy($id)
		{
			$Events = Events::findOrFail($id);
			$Events->destroy($id); 
			return redirect(action('EventsController@index'));
		}


}
