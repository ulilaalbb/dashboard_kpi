<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Test_case;
use Illuminate\Support\Facades\Http;
class MainController extends Controller
{
    //
    public function login_page(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    
    public function index(){
        $activityCount =  Activity::where('activity', 'LIKE', 'document')->count();
        $errorCount =  Activity::whereIn('activity', ['bug', 'found', 'error'])->count();
        $testcaseCount = Test_case::count();
        
        //
        return view('welcome', compact(['activityCount', 'errorCount','testcaseCount']));
    }

    public function create(){
        // $test_case = Test_case::all();
       
        
        // dd($test_case);
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
