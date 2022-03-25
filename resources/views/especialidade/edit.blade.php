@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Especialidades</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('especialidades.update', $especialidade->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('especialidade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
