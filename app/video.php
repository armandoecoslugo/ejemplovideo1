<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $fillable=['nombre_video','ruta'];
    //protected $fillable=['titulo','lugar','fecha','hora','precio',];
    protected $table = 'videos';
}
