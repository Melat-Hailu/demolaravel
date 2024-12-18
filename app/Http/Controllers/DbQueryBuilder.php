<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DbQueryBuilder extends Controller
{
    //

    function Query()
    {
        // Retriving all Data From Database
        $response = DB::table('users')->get();
        // Retriving based on Condition
        // $response = DB::table('users')->where('name', 'yitayew')->get();
        // Selecting The first row only
        // $response = DB::table('users')->first();
        // $response = [$response]; // Converting to Array

        // Inserting Records
        // $response = DB::table('users')->insert([
        //     'name' => 'hellen',
        //     'email' => 'helleneab@gail.com',
        //     'email_verified_at' => '2024-11-05 19:05:03',
        //     'password' => 'hellenl@123',
        //     'remember_token' => '123',
        //     'created_at' => '2024-11-05 19:05:03',
        //     'updated_at' => '2024-11-05 19:05:03'
        // ]);
        // if ($response) {
        //     return "Data added!!";
        // } else {
        //     return "Data Not added!!!";
        // }
        // Updatting Record
        // $response = DB::table('users')->where('name', 'melat')->update(
        //     ['password' => '12784']
        // );
        // if ($response) {
        //     return "Data Updated!!";
        // } else {
        //     return "Data Not Updated!!!";
        // }
        // Deletting Record
        // $response = DB::table('users')->where('name', 'Haile')->delete();
        // if ($response) {
        //     return "Data Deleted!!";
        // } else {
        //     return "Data Not Deleted!!!";
        // }
        return view('DbqueryView', ['users' => $response]);
    }
}
