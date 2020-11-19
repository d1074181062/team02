<?php

namespace App\Http\Controllers;
use App\Models\property;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Carbon\Carbon;

class propertyController extends Controller
{
    //
    public function index()
    {
        $properties=property::all();

        return view('property.index',['properties'=>$properties]);
    }

    public function create()
    {

        /*$property=property::insert([
            'property'=>$request->input('property',"1"),
            'characteristic'=>$request->input('characteristic',"2"),
            'home'=>$request->input('home',"3"),
            'weakness'=>$request->input('weakness',"4"),
            'created_at'=>Carbon::now() ,
            'updated_at'=>Carbon::now()]);
        $select=property::all()->toArray();-->


            return view('property.create', $select);*/
        $request = property::all();

        return view('property.create', ["somatotypes" => $request]);





    }
    public function show($id)
    {


        $temp=property::find($id);
        if ($temp==null)
            return"no find";
        $property=$temp->toArray();

        return view('property.show',$property);
        /*if($id==5) {
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
            "grop"=> $property_grop,"area"=> $property_area,"property_id"=>$id]);*/
    }
    public function edit($id)
    {
        return view('property.edit')->with("property_edit_id",$id);;
    }
}
