<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Http;
class ActivityController extends Controller
{
    //
    public function index(){
        $activity =  Activity::orderBy('created_at', 'desc')->get();
        
        return view('activity.activity', compact(['activity']));
    }

    public function create(){
        
        return view('activity.new_activity');
    }
    public function store(Request $request){
        // dd($request->except('_token'));
        $data = $request->except('_token');
        // $data['is_done'] = $request->has('is_done');
        Activity::create($data);
        return redirect('activity');
    }
}
