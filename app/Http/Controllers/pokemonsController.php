<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatepokemonsRequest;
use App\Models\pokemon;
use App\Models\property;
use Carbon\Carbon;
use Database\Seeders\pokemonsTableSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pokemonsController extends Controller
{
    //
    public function index()
    {

        $pokemon = pokemon::all();
        $groups =  pokemon::Allgroups()->get();
        $data = [];
        foreach ($groups as $group)
        {
            $data["$group->group"] = $group->group;
        }
        return view('pokemons.index',['pokemons'=>$pokemon, 'groups'=>$data]);


    }

    public function group(Request $request)
    {
        $pokemon = pokemon::group($request->input('pos'))->get();

        $groups =  pokemon::Allgroups()->get();
        $data = [];
        foreach ( $groups as  $group)
        {
            $data["$group->group"] = $group->group;
        }
        return view('pokemons.index', ['pokemons' => $pokemon, 'groups'=>$data]);
    }

    public function growing()
    {
        $pokemon = pokemon::growing()->get();
        $groups =  pokemon::Allgroups()->get();
        $data = [];
        foreach ($groups as $group)
        {
            $data["$group->group"] = $group->group;
        }
        return view('pokemons.index',['pokemons'=>$pokemon, 'groups'=>$data]);
    }

    public function create()
    {
        $properties = DB::table('property')
            ->select('property.id', 'property.property')
            ->orderBy('property.id', 'asc')
            ->get();

        $data = [];
        foreach ($properties as $property)
        {
            $data[$property->id] = $property->property;
        }
        return view('pokemons.create', ['properties' =>$data]);


    }

    public function show($id)
    {
        //$temp=pokemon::find($id);
        //if ($temp==null)
         //   return"no find";
        //$pokemon=$temp->toArray();
        $pokemon=pokemon::findOrFail($id);
        $property=property::findOrFail($pokemon->team_num);

        return view('pokemons.show',['pokemons'=>$pokemon,'property_name'=>$property->property]);
    }
    public function edit($id)
    {
        $properties = DB::table('property')
            ->select('property.id', 'property.property')
            ->orderBy('property.id', 'asc')
            ->get();

        $data = [];
        foreach ( $properties as $property)
        {
            $data[$property->id] = $property->property;
        }

        $pokemons = pokemon::findOrFail($id);

        return view('pokemons.edit', ['pokemons' =>$pokemons, 'properties' => $data])->with("po_id",$id);


    }
    public function store(CreatepokemonsRequest $request)
    {
        $name=$request->input('name');
        $team_num=$request->input('team_num');
        $height=$request->input('height');
        $weight=$request->input('weight');
        $growing=$request->input('growing');
        $group=$request->input('group');
        $place=$request->input('place');
        pokemon::create([
            'name'=>$name,
            'team_num'=>$team_num,
            'height'=>$height,
            'weight'=>$weight,
            'growing'=>$growing,
            'group'=>$group,
            'place'=> $place,
            'created'=>carbon::now()

        ]);
        return redirect('pokemons');

    }
    public function update($po_id,CreatepokemonsRequest $request)
    {
        $pokemon=pokemon::FindOrFail($po_id);
        $pokemon->name = $request->input('name');
        $pokemon->team_num = $request->input('team_num');
        $pokemon->height = $request->input('height');
        $pokemon->weight = $request->input('weight');
        $pokemon->growing = $request->input('growing');
        $pokemon->group = $request->input('group');
        $pokemon->place = $request->input('place');
        $pokemon->save();


        return redirect('pokemons');
    }

    public function delete($id)
    {
        $pokemon=pokemon::FindOrFail($id);
        $pokemon->delete();


        return redirect('pokemons');
    }
}

