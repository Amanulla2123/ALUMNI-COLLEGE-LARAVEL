<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Createpost extends Model
{
    protected $fillable =['userId','title','subtitle','attachment1','attachment2','attachment3','description'];  
}
