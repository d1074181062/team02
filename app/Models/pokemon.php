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

}
