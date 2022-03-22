<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname','id_artist',];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agents';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

     
    /**
     * The types that belong to the artist.
     */
    public function artists()
    {
        return $this->belongsTo('App\Models\Artist');
    }
}
