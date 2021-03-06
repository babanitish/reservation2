<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artists';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

     
    /**
     * The types that belong to the artist.
     */
    public function types()
    {
        return $this->belongsToMany('App\Models\Type');
    }
    public function agents()
    {
        return $this->hasMany('App\Models\Agent');
    }

}
