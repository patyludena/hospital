@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-left">
                            <span class="card-title">Especialidades</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-warning" href="{{ route('especialidades.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $especialidade->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $especialidade->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fech Registro:</strong>
                            {{ $especialidade->fech_registro }}
                        </div>
                        <div class="form-group">
                            <strong>Fech Modificacion:</strong>
                            {{ $especialidade->fech_modificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $especialidade->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
