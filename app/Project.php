<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Necesario cuando usamos Project::create($request->all()), para indicar que campos se pueden registrar masivamente
    // protected $fillable = ['title', 'url', 'description'];

    // Necesario cuando nos protegemos de asignación masiva a través de $request->only('campoA', 'campoB', 'campoN');
    // protected $guarded = [];

    // No es necesario declarar en el modelo las propiedades $fillable o $guarded, cuando nos protegemos de asignación masiva a través del resultado de las validaciones. - FormRequest. En este caso, los campos que se pueden asignar masivamente son los que figuran en el arreglo de validación.

    public function getRouteKeyName()
    {
        return 'url';
    }
}
