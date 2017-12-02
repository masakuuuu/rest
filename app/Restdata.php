<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    protected $table = 'restdata';
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'message' => 'required'
    );
    
    public function getData()
    {
        return $this->name . ':' .$this->message;
    }
}
