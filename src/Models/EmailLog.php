<?php

namespace EmanueleToffolon\LaravelEmailDatabaseLog\Models;

use Illuminate\Database\Eloquent\Model;

class EmailLog extends Model
{
    protected $table = 'email_log';

    protected $fillable = [
        'date',
        'from',
        'to',
        'cc',
        'bcc',
        'subject',
        'body',
        'headers',
        'attachments'
    ];
    protected $hidden = [];
    protected $casts = [];
}
