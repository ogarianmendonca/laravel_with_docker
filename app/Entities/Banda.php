<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method find(int $id)
 */
class Banda extends Model
{
    use SoftDeletes;

    protected $table = 'Bandas';

    protected $fillable = [
        'nome',
        'genero',
        'data_criacao',
    ];

    /**
     * Um para muitos
     * @return HasMany
     */
    public function albuns()
    {
        return $this->hasMany('App\Entities\Album');
    }

    /**
     * Um para muitos
     * @return HasMany
     */
    public function membros()
    {
        return $this->hasMany('App\Entities\Membro');
    }
}
