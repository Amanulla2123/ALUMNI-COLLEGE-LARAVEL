<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{

    protected $fillable = ['userid','name', 'email','password','gender','Nationality','Countryofresidence','City','Contactno','Schoolname','Admissionnumber','Profile','Fromyear','Toyear','Passoutyear', ];

    protected $table = 'Students';

    public function user()
    {
        return $this->belongsTo(User::class, 'userid', 'id');
    }


  
}
