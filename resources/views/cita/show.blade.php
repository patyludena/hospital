@extends('layouts.app')
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-left">
                            <span class="card-title">La reserva de su cita es:</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-warning" href="{{ route('citas.index') }}"> Regresar </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Especialidad:</strong>

                            {{ $cita->especialidade->nombre }}
                            
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $cita->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $cita->hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
