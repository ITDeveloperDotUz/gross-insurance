<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    public $fillable = ['name', 'type', 'owner','create', 'edit_own', 'edit', 'see_own', 'see', 'delete_own', 'delete', 'all', 'assign'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
