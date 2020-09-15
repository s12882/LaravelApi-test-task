<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Message
 * @package App\Models
 * @property string $text
 * @property string $ip
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @mixin Model
 */
class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'ip'
    ];
}
