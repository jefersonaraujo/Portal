<?php

namespace sistemaLaravel;

use Illuminate\Database\Eloquent\Model;

class Chamadas extends Model
{

  protected $table = 'call_entry';
  protected $primaryKey = 'id';

  public $timestamps = false;
  protected $fillable = [

    'id_agent',
    'callerid',
    'datetime_init',
    'datetime_end',
    'duration',
    'status',
    'duration_wait'

  ];

  protected $guarded = [];
}
