<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Employee;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Blogs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null) {
        if ($id == null) {


            //$locations_with_devices = Blogs::with('Employees')->get();
            //return $locations_with_devices;
           /* echo '<pre>';
            print_r($locations_with_devices);
            echo '</pre>';*/








            /*$a = Blog::orderBy('id', 'desc')->get();
            $b = Employee::find($a->user_id);
            echo '<pre>';
            print_r($b);
            echo '</pre>';*/
            //return View('blogs.list');
            //return Blog::orderBy('id', 'desc')->get();

            $blogs = Blog::All();
            return View::make('blogs.list')->with('blogs', $blogs);

        } else {
            return $this->show($id);
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
