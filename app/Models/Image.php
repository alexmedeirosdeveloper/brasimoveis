<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{



    public function properties()
    {
        return $this->belongsToMany('App\Models\Property');
    }

    // Indicar o nome da tabela
    protected $table = 'propertiesimg';
    
    // Indicar quais colunas podem ser cadastrada
    protected $fillable = ['imageSlide', 'properties_id'];


}
