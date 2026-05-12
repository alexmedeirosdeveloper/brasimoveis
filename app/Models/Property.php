<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;

    /**
     * Nome da tabela
     */
    protected $table = 'properties';

    /**
     * Campos liberados para mass assignment
     */
    protected $guarded = [];

    /**
     * Relacionamento:
     * propriedade pertence a um usuário
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relacionamento:
     * propriedade possui muitas imagens
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Relacionamento:
     * propriedade possui muitos contatos
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}