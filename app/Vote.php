<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [

        'sessionId',
        'vote',
        'pollId'

    ];
}


// http://the-shop.io:3000/projects/5888940b3e5bbe696319f2be/sprints/588cc79e3e5bbe69ee766fb7/tasks/5889cbdf3e5bbe43f96341db