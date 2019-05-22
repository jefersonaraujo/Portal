<?php

namespace sistemaLaravel;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
  // Definimos a conexão "another" para este model
  protected $connection = 'mysql';
  protected $table = 'agent';
  protected $primaryKey = 'id';

  public $timestamps = false;
  protected $fillable = [

    'number',
    'name',
    'estatus',
    'password'

  ];

  protected $guarded = [];
}
