{{-- Para reutilizar los formularios en laravel, es necesario homogenizar su contenido e incluirlo dentro de un archivo que figure como una vista parcial.

Si bien los controles de edición y creación son identicos en ambos formularios. Su comportamiento es distinto:

1. El formulario de creación solo puede mostrar los valores anteriores cuando no pasa la validación.  {{ old('campo') }}
2. El formulario de edición tiene el mismo comportamiento que el de creación, sumado a que debe mostrar los valores actuales del registro en el formulario (lo debe llenar). {{ old('campo', valor_actual) }}

Para resolver el problema, en el controlador de creación se envía como dato a la vista una instancia vacia del modelo.
--}}
@csrf
<div class="form-group">
    <label>Titulo del Proyecto</label>
    <input type="text" name="title" class="form-control bg-light @error('title') is-invalid @else border-0 shadow-sm @enderror" placeholder="Ingrese un nombre para el proyecto" value="{{ old('title', $project->title) }}">
    {!! $errors->first('title', '<span class=invalid-feedback>:message</span>') !!}
</div>
<div class="form-group">
    <label>URL Amigable</label>
    <input type="text" name="url" class="form-control bg-light @error('url') is-invalid @else border-0 shadow-sm @enderror" placeholder="Ingrese una URL amigable para el proyecto" value="{{ old('url', $project->url) }}">
    {!! $errors->first('url', '<span class=invalid-feedback>:message</span>') !!}
</div>
<div class="form-group">
    <label>Descripción del Proyecto</label>
    <textarea name="description" class="form-control bg-light @error('description') is-invalid @else border-0 shadow-sm @enderror" placeholder="Ingrese una descripción detallada para el proyecto" rows="5">{{ old('description', $project->description) }}</textarea>
    {!! $errors->first('description', '<span class=invalid-feedback>:message</span>') !!}
</div>
{{-- Variable enviada a través del include('parcial', [arreglo_variables]) --}}
<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
