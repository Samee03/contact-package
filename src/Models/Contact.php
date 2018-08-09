<?php

namespace Ultron\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];
    protected $fillable = ['name', 'email', 'message'];
    public $timestamps = ['created_at', 'updated_at'];
}
