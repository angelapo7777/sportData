<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Championship
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Championship whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Championship whereName($value)
 * @mixin \Eloquent
 * @property int|null $sport_id
 * @property-read \App\Sport|null $sport
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Championship whereSportId($value)
 */
class Championship extends Model
{
    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'sport_id'
    ];

    // Don't write timestamps at factory
    public $timestamps  = false;

    /**
     * Relation with sports
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sport()
    {
        return $this->belongsTo('App\Sport');
    }
}
