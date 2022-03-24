@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Especialidades</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
      
                        @can('crear-especialidad')
                        <a class="btn btn-warning" href="{{ route('especialidades.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Descripción</th>
                                    <th style="color:#fff;">Fecha de registro</th> 
                                    <th style="color:#fff;">Fecha de modificación</th>
                                    <th style="color:#fff;">Estado</th>
                                    <th style="color:#fff;">Acciones</th>
                              </thead>
                              <tbody>
                            @foreach ($especialidades as $especialidad)
                            <tr>
                                <td style="display: none;">{{ $especialidad->id }}</td>                                
                                <td>{{ $especialidad->nombre }}</td>
                                <td>{{ $especialidad->descripcion }}</td>
                                <td>{{ $especialidad->fech_registro }}</td>
                                <td>{{ $especialidad->fech_modificacion }}</td>
                                <td>{{ $especialidad->estado }}</td>
                                <td>
                                    <form action="{{ route('especialidades.destroy',$especialidad->id) }}" method="POST">                                        
                                        @can('editar-especialidad')
                                        <a class="btn btn-info" href="{{ route('especialidades.edit',$especialidad->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-especialidad')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $especialidades->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
