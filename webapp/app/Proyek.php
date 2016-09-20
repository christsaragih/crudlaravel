<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model implements UserInterface, RemindableInterface
{
    //
    protected $tabele='proyek';
}
