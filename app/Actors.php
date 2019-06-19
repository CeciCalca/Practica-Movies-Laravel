<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{

protected $table='actors';

protected $appends = ['full_name'];

protected $with=['movie'];

protected $withCount=['pelis'];

public function getFullNameAttribute(){
  return $this->first_name . " " . $this->last_name;
}

public function movie(){
  return $this-> belongsTo (Movies::class , 'favorite_movie_id' );
}

public function pelis(){
  return $this->belongsToMany(Movies::class, 'actor_movie','actor_id', 'movie_id');
}
}
