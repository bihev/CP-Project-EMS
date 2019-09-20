<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Event;
//use MaddHatter\LaravelFullcalendar\Facades\calendar;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        $event = [];
        foreach($events as $row){
            $enddate = $row->end_date." 24:00:00";
            $event[] = \Calendar::event(
                $row->title,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'color' => $row->color,
                ]
            );
        }
        
        $calendar = \Calendar::addEvents($event);
        return view('events', compact('event', 'calendar'));
    }
    
    public function display(){
        return view('addevent');
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'color' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        $events = new Event;
        
        $events->title = $request->input('title');
        $events->color = $request->input('color');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->user_id = auth()->user()->id;
        
        
        $events->save();
        
        return redirect('events')->with('succes', 'Events Added');
    }
    
    
    public function show()
    {
        $events = Event::all();
        return view('display')->with('events', $events);
    }
    
    public function edit($id)
    {
        $events = Event::find($id);
        return view('editform', compact('events', 'id'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'color' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        $events = Event::find($id);
        
        $events->title = $request->input('title');
        $events->color = $request->input('color');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        
        $events->save();
        
        return redirect('events')->with('success', 'Data updated');
    }
    
    
    public function destroy($id)
    {
        $events = Event::find($id);
        $events->delete();
        
        return redirect('events')->with('success', 'Data delete');
    }
    
    
    /*public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        
        if ($validator->fails()){
            \Session::flash('warning', 'please enter valid details');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }
        
        $events = new Event;
        $event=>event_title = $request['title'];
        $event=>event_date = $request['start_date'];
        $event=>event_date = $request['end_date'];
        $event->save();
        
        \Session::flash('success', 'event added successfully');
        return Redirect::to('/events');
        
    }*/
}