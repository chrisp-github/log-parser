<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserAgent
 *
 * @property integer $id
 * @property string $system_type
 * @property string $browser_type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserAgent whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserAgent whereSystemType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserAgent whereBrowserType($value)
 * @mixin \Eloquent
 */
class UserAgent extends Model
{
    protected $table = 'user_agent';

    public $timestamps = false;

    protected $fillable = [
        'system_type',
        'browser_type'
    ];

    protected $guarded = [];

    public function logs() {
        return $this->hasMany('App\Models\Log');
    }
        
}