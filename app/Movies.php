<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
  protected $table='movies';

  protected $with=['genre'];

  public function genre(){

    return $this-> belongsTo (Genres::class);
  }

  public function actors(){
    return $this-> belongsToMany (Actors::Class, 'actor_movie','movie_id','actor_id');
  }

}
