<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Log
 *
 * @property integer $id
 * @property string $date
 * @property integer $bytes
 * @property string $page_url
 * @property string $request_url
 * @property integer $request_id
 * @property integer $user_agent_id
 * @property integer $connection_id
 * @property-read \App\Models\Request $request
 * @property-read \App\Models\UserAgent $userAgent
 * @property-read \App\Models\Connection $connection
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log whereBytes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log wherePageUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log whereRequestUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log whereRequestId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log whereUserAgentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log whereConnectionId($value)
 * @mixin \Eloquent
 * @property integer $response_code
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log whereResponseCode($value)
 */
class Log extends Model
{
    protected $table = 'log';

    public $timestamps = false;

    protected $fillable = [
        'date',
        'response_code',
        'bytes',
        'page_url',
        'request_url',
        'request_id',
        'user_agent_id',
        'connection_id'
    ];

    protected $guarded = [];

    public function request() {
        return $this->belongsTo('App\Models\Request');
    }

    public function userAgent() {
        return $this->belongsTo('App\Models\UserAgent');
    }

    public function connection() {
        return $this->belongsTo('App\Models\Connection');
    }

        
}