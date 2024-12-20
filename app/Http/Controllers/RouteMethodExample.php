<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteMethodExample extends Controller
{
    //
    function get()
    {
        return "this is the get method";
    }
    function post()
    {
        return "this is the post method";
    }
    function delete()
    {
        return "this is the delete method";
    }
    function put()
    {
        return "this is the put method";
    }
    function any()
    {
        return "this is the any method";
    }
    function group1()
    {
        return "this is the any method";
    }
    function group2()
    {
        return "this is the any method";
    }
}
