@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar cita</h3>
        </div>
       {{--  <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                            
                   
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{ route('citas.update',$cita->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombre">Nombre</label>
                                   <input type="text" name="nombre" class="form-control" value="{{ $cita->nombre }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                    
                                <div class="form-floating">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion" style="height: 100px">{{ $cita->descripcion }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="fech_registro">Fecha de registro</label>
                                   <input type="text" name="fech_registro" class="form-control" value="{{ $cita->fech_registro }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="fech_modificacion">Fecha de modificación</label>
                                   <input type="text" name="fech_modificacion" class="form-control" value="{{ $cita->fech_modificacion }}">
                                </div>
                            </div>   
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="estado">Estado</label>
                                   <input type="text" name="estado" class="form-control" value="{{ $cita->estado }}">
                                </div>
                                <br/>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>                                                      
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
@endsection
