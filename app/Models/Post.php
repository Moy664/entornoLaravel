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

    //mutadores y accesores
    protected function title(): Attribute{
        return Attribute:: make(
            set: function($value){ //se llama cada vez que la propiedad title se le asigna un nuevo valor este metodo se le llama mutador
                return strtolower($value);
            },
            get: function($value){ //se llama cada vez que la propiedad title se lee este metodo se le llama accesor
                return ucwords($value); //ucwords convierte la primer letra de cada palabra en mayuscula
            }
        );
    }
}
