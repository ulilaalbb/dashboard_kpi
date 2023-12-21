<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test_case;
use Illuminate\Support\Facades\Http;
class testcaseController extends Controller
{
    //
    public function index(){
        // $test_case = Test_case::all();
        // $test_case = Test_case::where('is_draft', false)->get();
        // $test_data = Test_case::orderBy('created_at', 'desc')->get();
        $test_case = Test_case::where('is_draft', false)
        
        ->orderBy('created_at', 'desc')
        ->get();
        $testCaseCount = Test_Case::count();

        // dd($test_case);
        return view('testcase.all_case', compact(['test_case','testCaseCount']));
    }

    public function create(){
        // $test_case = Test_case::all();
       
        
        // dd($test_case);
        return view('testcase.content_create_test', compact(['test_case']));
    }
    public function store(Request $request){

        $response = Http::post('http://localhost:8001/prediction', [
            'test_data' => $request->input('description')
        ]);
        $data_response = $response->json();

        $prediction = $data_response[0];

        $defaults = [
            'bobot' => $prediction,
            //'created_at' => now()
        ];
        //dd($request->except('_token'));
        $data = array_merge($request->except('_token'), $defaults);
        $data['is_draft'] = $request->has('is_draft');
        
        // $data['is_done'] = $request->has('is_done');

        Test_case::create($data);
        return redirect('test_case');
    }

    public function drafts(){
        $drafts = Test_case::where('is_draft', true)->get();
        return view('testcase.content_draft', compact('drafts'));
        // $test_case = Test_case::all();
        // // dd($test_case);
        // return view('testcase.all_case', compact(['test_case']));
    }

    public function edit($id){
        $test_case = Test_case::find($id);
        
        return view('testcase.edit', compact('test_case'));
        
    }
    public function update($id, Request $request){
        $test_case = Test_case::find($id);
        $test_case->update($request->except('_token'));
        return redirect('/draft');
        
    }
    

    public function submit($id)
    {
        // Update the is_draft attribute to false
        Test_case::where('id', $id)->update(['is_draft' => false]);

        // Redirect back or to a specific page
        return redirect('draft');
    }

    public function delete($id)
    {
        // Delete the draft with the given $id
        Test_case::find($id)->delete();

        // Redirect back or to a specific page
        return redirect()->route('draft');
    }
















}
