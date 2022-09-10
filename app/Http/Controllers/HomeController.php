<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Loads the home page
     * @return void
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Loads the first test page
     * @return void
     */
    public function test1()
    {
       return view('tests.test1');
    }

    /**
     * Loads the first test page
     * @return void
     */
    public function test2()
    {
        return view('tests.test2');
    }

    /**
     * Loads the first test page
     * @return void
     */
    public function test3()
    {
        return view('tests.test3');
    }

    /**
     * Calculates the test result for the test1 and show it
     * @param Request $request
     * @return void
     */
    public function result1(Request $request)
    {
        $data = [];

        for($i=1; $i<=10; $i++){
            if($request->input('opt'.$i)=='yes'){
                $data[] = 'x';
            }
        }

        if(count($data)<5){
            $message = 'Result 1 for test 1';
        }elseif(count($data)>5){

            $message = 'Result 2 for test 1';
        }

        return view('result', ['message'=>$message]);
    }

    /**
     * Calculates the test result for the test2 and show it
     * @param Request $request
     * @return void
     */
    public function result2(Request $request)
    {
        $data = [];

        for($i=1; $i<=10; $i++){
            if($request->input('opt'.$i)=='yes'){
                $data[] = 'x';
            }
        }

        if(count($data)<5){
            $message = 'Result 1 for test 2';
        }elseif(count($data)>5){

            $message = 'Result 2 for test 2';
        }

        return view('result', ['message'=>$message]);
    }

    /**
     * Calculates the test result for the test3 and show it
     * @param Request $request
     * @return void
     */
    public function result3(Request $request)
    {
        $data = [];

        for($i=1; $i<=10; $i++){
            if($request->input('opt'.$i)=='yes'){
                $data[] = 'x';
            }
        }

        if(count($data)<5){
            $message = 'Result 3 for test 3';
        }elseif(count($data)>5){

            $message = 'Result 3 for test 3';
        }

        return view('result', ['message'=>$message]);
    }
}
