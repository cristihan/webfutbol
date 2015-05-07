 <table class="table table-striped">

                        <tr>
                            <th>#</th>
                            <th>Rival</th>
                            <th>Campo</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th>Jornada</th>
                            <th>Goles_Favor</th>
                            <th>Goles_contra</th>
                            <th>Tarjetas Amarillas</th>
                            <th>Tarjetas_rojas</th>                           
                            <th>Categoria</th> 

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
                            <td>{{$partido->categoria_id}}</td>
                 
                            <td>
                     <a href="{{route('partidos.edit', $partido)}}">Editar</a>
                     <a href="" class="btn-delete">Eliminar</a>                             
                     <a class="" href="{{route('partidos.show', $partido)}}" role="button">Mostrar</a>            
                            </td>
                        </tr>
                        @endforeach
                    </table>