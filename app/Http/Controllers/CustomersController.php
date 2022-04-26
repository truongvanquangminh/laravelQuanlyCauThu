<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('players')
            ->get();
        return view('welcome', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = DB::table('players')
            ->insert(
                [
                    'name' => $_POST['name'],
                    'age' => $_POST['age'],
                    'national' => $_POST['national'],
                    'position' => $_POST['position'],
                    'salary' => $_POST['salary']
                ]
            );

        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('players')
            ->select('name', 'age', 'national', 'position', 'salary')
            ->where('id', $id)
            ->get();
        return view('edit', compact('data', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('players')
            ->where('id', $id)
            ->update(
                [
                    'name' => $_POST['name'],
                    'age' => $_POST['age'],
                    'national' => $_POST['national'],
                    'position' => $_POST['position'],
                    'salary' => $_POST['salary']
                ]
            );

        return redirect(route('index'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('players')->where('id', $id)->delete();
        return redirect(route('index'));
    }
}
