<?php

namespace sistemaLaravel;

use Illuminate\Database\Eloquent\Model;

class Concentrador extends Model
{
    protected $table = 'tb_concentrador';
    protected $primaryKey = 'cod_concentrador';

    public $timestamps = false;
    protected $fillable = [

      'descricao',
      'ip',
      'api_port',
      'ssh_port',
      'snmp_port',
      'snmp',
      'latitude',
      'altitude',
      'user',
      'password',
      'ativo'

    ];

    protected $guarded = [];

}
