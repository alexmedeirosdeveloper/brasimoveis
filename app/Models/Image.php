<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    public function user(){
        return $this ->belongsTo('App\Models\User');
    }

    public function properties() {
        return $this->hasMany('App\Models\Property');
    }

    // Indicar o nome da tabela
    protected $table = 'propertiesimg';
    
    // Indicar quais colunas podem ser cadastrada
    protected $fillable = ['imageSlide', 'properties_id'];

    public function image()
    {
        return $this->hasMany(User::class);
    }

}
