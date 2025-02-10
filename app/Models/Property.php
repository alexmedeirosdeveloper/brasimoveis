<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function user(){
        return $this ->belongsTo('App\Models\User');
    }

    public function images(){
        return $this ->belongsToMany('App\Models\Image');
    }

        // Indicar o nome da tabela
        protected $table = 'properties';

        // Indicar quais colunas podem ser cadastrada
        protected $fillable = ['id', 'ref'];
    
        public function property()
        {
            return $this->hasMany(User::class);
        }
}
