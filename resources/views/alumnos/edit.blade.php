@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Alumno
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($alumno, ['route' => ['alumnos.update', $alumno->id_alumno], 'method' => 'patch']) !!}

                        @include('alumnos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection