<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Connection
 *
 * @property integer $id
 * @property string $ip
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Connection whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Connection whereIp($value)
 * @mixin \Eloquent
 */
class Connection extends Model
{
    protected $table = 'connection';

    public $timestamps = false;

    protected $fillable = [
        'ip'
    ];

    protected $guarded = [];

    public function logs() {
        return $this->hasMany('App\Models\Log');
    }
        
}