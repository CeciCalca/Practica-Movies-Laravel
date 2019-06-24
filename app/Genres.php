<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Genres extends Model
{
    protected $table='genres';
    protected $withCount=['movies'];


public function movies(){
  return $this-> hasMany (Movies::Class, 'genre_id');
}


}
