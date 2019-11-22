<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table ='evenements';
    protected $fillable = [
        'text_desc', 'date_deb','date_fin','image','users_id'
      
    ];
}
