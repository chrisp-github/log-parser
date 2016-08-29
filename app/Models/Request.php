<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Request
 *
 * @property integer $id
 * @property string $type
 * @property string $version
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Request whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Request whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Request whereVersion($value)
 * @mixin \Eloquent
 */
class Request extends Model
{
    protected $table = 'request';

    public $timestamps = false;

    protected $fillable = [
        'type',
        'version'
    ];

    protected $guarded = [];

    public function logs() {
        return $this->hasMany('App\Models\Log');
    }
        
}