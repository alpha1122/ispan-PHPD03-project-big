<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        DB::connection('mysql');

        $users = DB::select('select * from schedules_info');
       
        foreach ($users as $key => $value) {
            $data[$key] = (array)$value;
        }
        function array_to_json($sel_array)
        {

            foreach ($sel_array as $key => $value) {
                if (
                    is_string($key) || is_string($value)
                ) {

                    $new_array[urlencode($key)] = urlencode($value);
                }
            }

            return urldecode(json_encode($new_array));
        }

        foreach ($users as $key => $value) {

            echo array_to_json($data[$key]) . '<br>';
        }


        // //select
        // $users = DB::select('select * from hotels_info where active = ?', [1]);
        // //insert
        // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        // //update
        // $affected = DB::update('update users set votes = 100 where name = ?', ['John']);
        // //delete，後面一樣可以接 where 語句設定條件
        // $deleted = DB::delete('delete from users where id = ?', [1]);
        // //一般陳述式
        // DB::statement('drop table users');
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
