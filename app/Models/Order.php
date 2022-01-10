<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //Colocamos el timestamps como false para que no registre o guarde el updated y created time
    public $timestamps = false;
}
