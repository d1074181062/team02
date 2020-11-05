<?php

namespace App\Http\Controllers;
use App\Models\property;
use Illuminate\Http\Request;

class propertyController extends Controller
{
    //
    public function index()
    {
        return view('property.index');
    }

    public function create()
    {
        return view('property.create');
    }
    public function show($id)
    {
        if($id==5) {
            $pokemon_name = "豪力";
            $property_grop = "格鬥";
            $property_area = "地面";
        }
        else
        {
            $pokemon_name = "error";
            $property_grop = "error";
            $property_area = "error";
        }
        return view('property.show')->with(["name"=> $pokemon_name,
            "grop"=> $property_grop,"area"=> $property_area,"property_id"=>$id]);
    }
    public function edit($id)
    {
        return view('property.edit')->with("property_edit_id",$id);;
    }
}
