<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'memberid', 'name', 'description','photo','publicationtstatus',
    ];
}
