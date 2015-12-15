<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Words extends Model
{
       protected $fillable = array('ID', 'Source', 'Target','Last_edit_by','Date_Time_Edit','Platform','Product');
}
