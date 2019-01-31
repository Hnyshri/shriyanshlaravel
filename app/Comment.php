<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use SoftDeletes;
    use Notifiable;


    protected $fillablecomment = [
        'comment_title','comment_details',
    ];
}
