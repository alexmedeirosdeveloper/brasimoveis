<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function user(){
        return $this ->belongsTo('App\Models\User');
    }

    public function image(){
        return $this ->belongsTo('App\Models\Image');
    }

    public function contact(){
        return $this ->belongsTo('App\Models\Contact');
    }

        // Indicar o nome da tabela
        protected $table = 'properties';

        // Indicar quais colunas podem ser cadastrada

        protected $guarded = [];
    
        public function property()
        {
            return $this->hasMany(User::class);
        }

        public function images()
        {
            return $this->hasMany(Image::class);
        }

        public function contacts()
        {
            return $this->hasMany(Contact::class);
        }
}
