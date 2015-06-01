<!--Para hacer las rutas que no son GET es decir hacer las rutas POST,PUT, DELETE,
necesitamos hacer un formulario y lo tenemos en la clase edit.blade.php
1 parametro es la rura destroy
2 parametro el metodo DELETE-->
{!!Form::open(['route' => ['partidos.destroy', $partido], 'method' => 'DELETE']) !!}
<button type="submit"  onclick="return confirm('Seguro que desea Eliminar?')"class="btn btn-danger">{{ trans('validation.attributes.eliminar_partido') }}</button>
{!!Form::close() !!}
