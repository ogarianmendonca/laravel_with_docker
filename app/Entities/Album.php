<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use SoftDeletes;

    protected $table = 'Albuns';

    protected $fillable = [
        'nome',
        'data_lancamento',
        'qtd_musicas',
        'banda_id'
    ];

    /**
     * Um para muitos (inverso)
     * @return BelongsTo
     */
    public function banda()
    {
        return $this->belongsTo('App\Entities\Banda');
    }
}
