@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Especialidades</h3>
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                            @can('crear-especialidad')
                                 <a class="btn btn-warning" href="{{ route('especialidades.create') }}">Nuevo</a>
                            @endcan
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <tr>
                                        <th style="color:#fff;">No</th>      
										<th style="color:#fff;">Nombre</th>
										<th style="color:#fff;">Descripcion</th>
										<th style="color:#fff;">Fech Registro</th>
										<th style="color:#fff;">Fech Modificacion</th>
										<th style="color:#fff;">Estado</th>
                                        <th style="color:#fff;">Aciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($especialidades as $especialidade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $especialidade->nombre }}</td>
                                            
											<td>{{ $especialidade->descripcion }}</td>
											<td>{{ $especialidade->fech_registro }}</td>
											<td>{{ $especialidade->fech_modificacion }}</td>
											<td>{{ $especialidade->estado }}</td>

                                            <td>
                                                <form action="{{ route('especialidades.destroy',$especialidade->id) }}" method="POST">
                                                    <a class="btn btn-primary" href="{{ route('especialidades.show',$especialidade->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-info" href="{{ route('especialidades.edit',$especialidade->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $especialidades->links() !!}
            </div>
        </div>
    </div>
@endsection
