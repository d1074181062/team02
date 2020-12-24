<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    use HasFactory;
    protected $table = "pokemons";

    protected $fillable = [

        'name',
        'team_num',
        'height',
        'weight',
        'growing',
        'group',
        'place',
        'created_at',
        'updated_at',
        'carbon'
    ];

    public function scopeAllpokemon($query)
    {
        $query->join('property', 'pokemons.team_num', '=', 'property.id')
            ->orderBy('pokemons.id')
            ->select(
                'pokemons.id',
                'pokemons.name',
                'property.property as property',
                'pokemons.height',
                'pokemons.weight',
                'pokemons.growing',
                'pokemons.group',
                'pokemons.place');
    }
    public function scopegrowing($query)
    {
        $query->join('property', 'pokemons.team_num', '=', 'property.id')
            ->where('growing', '=', '否')
            ->orderBy('pokemons.id')
            ->select(
                'pokemons.id',
                'pokemons.name',
                'property.property as property',
                'pokemons.height',
                'pokemons.weight',
                'pokemons.growing',
                'pokemons.group',
                'pokemons.place');
    }

    public function scopeAllgroups($query)
    {
        $query->select('group')->groupBy('group');
    }

    public function scopegroup($query, $pos)
    {
        $query->join('property', 'pokemons.team_num', '=', 'property.id')
            ->where('group', '=', $pos)
            ->orderBy('place')
            ->select(
                'pokemons.id',
                'pokemons.name',
                'property.property as property',
                'pokemons.height',
                'pokemons.weight',
                'pokemons.growing',
                'pokemons.group',
                'pokemons.place');
    }
    public function propertyss()
    {
        return $this->belongsTo('App\Models\property', 'team_num', 'id');
    }

}
