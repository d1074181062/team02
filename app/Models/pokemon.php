<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    use HasFactory;
    protected $table="pokemons";

    protected $fillable=[

        'name',
        'team_num',
        'height',
        'weight',
        'growing',
        'group',
        'place',
        'created_at' ,
        'updated_at',
        'carbon'
    ];
}
