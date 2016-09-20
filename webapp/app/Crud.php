<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table='crud';
    protected $primaryKeey='id';
    protected $fillable=['judul','isi'];
    public $timestamps=false; 
}
