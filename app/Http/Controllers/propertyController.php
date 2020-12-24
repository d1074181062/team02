<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatepropertyRequest;
use App\Models\property;
use App\Models\pokemon;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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
        $pokemons=$temp->pokemons;
        /*if ($temp==null)
            return"no find";
        $property=$temp->toArray();*/

        return view('property.show',['temp'=>$temp,'pokemons'=>$pokemons]);
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


        $property = property::findOrFail($id);

return view('property.edit', ['property' =>$property])->with("property_edit_id",$id);

    }
    public function store(CreatepropertyRequest $request)
    {
        $property = $request->input('property');
        $characteristic = $request->input('characteristic');
        $home = $request->input('home');
        $weakness = $request->input('weakness');

        property::create([
            'property' => $property,
            'characteristic' => $characteristic,
            'home' => $home,
            'weakness' => $weakness,
            'created' => carbon::now()

        ]);
        return redirect('property');
    }
    public function update($property_edit_id,CreatepropertyRequest $request)
    {
        $property=property::FindOrFail($property_edit_id);
        $property->property = $request->input('property');
        $property->characteristic = $request->input('characteristic');
        $property->home = $request->input('home');
        $property->weakness = $request->input('weakness');
        $property->save();


        return redirect('property');
    }

    public function delete($id)
    {
        $property=property::FindOrFail($id);
        $property->delete();


        return redirect('property');
    }
}
