 <table class="table table-striped">

                        <tr>
                            <th>#</th>
                            <th>{{ trans('validation.attributes.rival') }}</th>
                            <th>{{ trans('validation.attributes.campo') }}</th>
                            <th>{{ trans('validation.attributes.estado') }}</th>
                            <th>{{ trans('validation.attributes.fecha') }}</th>
                            <th>{{ trans('validation.attributes.jornada') }}</th> 
                            <th>{{ trans('validation.attributes.goles_favor') }}</th>
                            <th>{{ trans('validation.attributes.goles_contra') }}</th>
                            <th>{{ trans('validation.attributes.tarjeta_amarilla') }}</th>
                            <th>{{ trans('validation.attributes.tarjeta_roja') }}</th>                           
                            <th>{{ trans('validation.attributes.categoria') }}</th> 

                        </tr>
                        @foreach($partidos as $partido)
                        <tr data-id="{{$partido->id}}">
                            <td>{{$partido->id }}</td>
                            <td>{{$partido->rival}}</td>
                            <td>{{$partido->campo}}</td>
                            <td>{{$partido->estado}}</td>
                            <td>{{$partido->fecha}}</td>
                            <td>{{$partido->jornada}}</td>
                            <td>{{$partido->goles_a_favor}}</td>
                            <td>{{$partido->goles_en_contra}}</td>
                            <td>{{$partido->tarjetas_amarillas}}</td>
                            <td>{{$partido->tarjetas_rojas}}</td>
                            <td>{{$partido->categoria->nombre}}</td>
                 
                            <td>
                     <a href="{{route('partidos.edit', $partido)}}">{{ trans('validation.attributes.editar') }}</a>
                     <a href="" class="btn-delete">{{ trans('validation.attributes.eliminar') }}</a>                             
                     <a class="" href="{{route('partidos.show', $partido)}}" role="button">{{ trans('validation.attributes.mostrar') }}</a>            
                            </td>
                        </tr>
                        @endforeach
                    </table>