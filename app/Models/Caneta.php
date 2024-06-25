<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caneta extends Model
{
    use HasFactory;
    protected $fillable = [
        'cor',
        'tipo_de_tinta',
        'marca',
        'ponta',
        'material_do_corpo',
    ];

}
