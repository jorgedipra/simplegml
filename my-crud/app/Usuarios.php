<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['name', 'last_name', 'document', 'email', 'country', 'adress', 'telephone'];

}
