<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function status_type()
    {
        return $this->belongsTo('App\Models\StatusType');
    }

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function mzad_item()
    {
        return $this->hasMany('App\Models\MzadItem');
    }

}
