<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use App\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.country.list');
    }

    /**
     * Get
     *
     */
    public function getList()
    {
        $countries = Country::select(['id','country_code','country_name','created_at','updated_at']);
        return Datatables::of($countries)->make(true);
    }
}
