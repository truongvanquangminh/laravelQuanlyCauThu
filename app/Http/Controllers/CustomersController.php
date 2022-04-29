<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Players;
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
        //Query builder
        // $data = DB::table('players')
        //     ->get();

        //Eloquent ORM
        $data = Players::all();
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
    public function store(ValidationRequest $request)
    {
        //Query builder
        // $data = DB::table('players')
        //     ->insert(
        //         [
        //             'name' => $_POST['name'],
        //             'age' => $_POST['age'],
        //             'national' => $_POST['national'],
        //             'position' => $_POST['position'],
        //             'salary' => $_POST['salary']
        //         ]
        //     );

        //Eloquent ORM
        $data = new Players();
        $data->name = $_POST['name'];
        $data->age = $_POST['age'];
        $data->national = $_POST['national'];
        $data->position = $_POST['position'];
        $data->salary = $_POST['salary'];
        $data->save();

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
        //Query builder
        // $data = DB::table('players')
        //     ->select('name', 'age', 'national', 'position', 'salary')
        //     ->where('id', $id)
        //     ->get();

        //Eloquent ORM
        $data = Players::where('id', $id)->get();

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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationRequest $request, $id)
    {
        //Query builder
        // $data = DB::table('players')
        //     ->where('id', $id)
        //     ->update(
        //         [
        //             'name' => $_POST['name'],
        //             'age' => $_POST['age'],
        //             'national' => $_POST['national'],
        //             'position' => $_POST['position'],
        //             'salary' => $_POST['salary']
        //         ]
        //     );

        //Eloquent ORM
        $data = Players::where('id', $id)
            ->update(
                [
                    'name' => $_POST['name'],
                    'age' => $_POST['age'],
                    'national' => $_POST['national'],
                    'position' => $_POST['position'],
                    'salary' => $_POST['salary'],
                ]
            );

        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Query builder
        // $data = DB::table('players')->where('id', $id)->delete();

        //Eloquent ORM
        $data = Players::where('id', $id)->delete();
        return redirect(route('index'));
    }
}
