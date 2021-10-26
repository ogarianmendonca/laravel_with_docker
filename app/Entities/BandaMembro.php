<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BandaMembro extends Model
{
    use SoftDeletes;

    protected $table = 'banda_membro';

    protected $fillable = [
        'banda_id',
        'membro_id'
    ];


}
