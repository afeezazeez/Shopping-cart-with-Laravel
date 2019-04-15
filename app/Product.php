<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filliable= ['imagPath','title','description','price'];
}
