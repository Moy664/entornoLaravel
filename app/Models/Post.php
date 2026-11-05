<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    #esto no sigue convensiones ya que se puede simplificar mas
    // protected $table = 'posts';

    # si se comenta la linea de arriba, laravel asume que el nombre de la tabla es el plural del nombre del modelo, en este caso posts
    #eloquent tiene la convencion de que el nombre del archivo o clase debe de ser en sigular y con mayuscula la primer letra
    #al ser un framework programada en ingles, si no se especifica la trabla con protected $table = 'posts';
    #eloquent buscara la tabla en plural y en minuscula, es decir, posts
    //

    //cada vez que elocuent recupera un registro de la base de datos, este lo convierte a un objeto de la clase Post, y 
    //cada campo de la tabla se convierte en una propiedad del objeto, y cada propiedad tiene un tipo de dato, por defecto todos los campos son string, 
    //pero se puede especificar el tipo de dato que se quiere que tenga cada propiedad, en este caso se especifica que la propiedad published_at sea de tipo datetime
    protected function casts(): array{ 
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    //mutadores y accesores
    protected function title(): Attribute{
        return Attribute:: make(
            set: function($value){ //se llama cada vez que la propiedad title se le asigna un nuevo valor este metodo se le llama mutador
                return strtolower($value);
            },
            get: function($value){ //se llama cada vez que la propiedad title se lee este metodo se le llama accesor
                return ucfirst($value); //ucfirst convierte la primer letra en mayuscula
            }
        );
    }
}
