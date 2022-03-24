@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Especialidad</h3>
        </div>
        <div class="section-body">
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

                    <form action="{{ route('especialidades.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombre">Nombre</label>
                                   <input type="text" name="nombre" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">                   
                                <div class="form-floating">
                                <textarea class="form-control" name="descripcion" style="height: 100px"></textarea>
                                <label for="descripcion">Descripción</label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="fech_registro">Fecha de Registro</label>
                                   {{--<input type="text" name="fech_registro" class="form-control">--}}
                                   <form><input type="date" id="fech_registro" name="fech_registro" required="required"></form>
                                </div>
                            </div>
                            <br/>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="fech_modificacion">Fecha de Registro</label>
                                   {{--<input type="text" name="fech_modificacion" class="form-control">--}}
                                   <input type="date" id="fech_modificacion" name="fech_modificacion" required="">
                                   <br/>
                                </div>
                            </div>                               
                            <div class="col-xs-12 col-sm-12 col-md-12">                  
                                <div class="form-group">
                                   <label for="estado">Estado</label>
                                   <input type="text" name="estado" class="form-control">
                                </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
