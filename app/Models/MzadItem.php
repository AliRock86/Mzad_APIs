<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MzadItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function mzad_type()
    {
        return $this->belongsTo('App\Models\MzadType');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function addresse()
    {
        return $this->belongsTo('App\Models\Addresse');
    }

}
