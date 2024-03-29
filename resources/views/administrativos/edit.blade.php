@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Administrativo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($administrativo, ['route' => ['administrativos.update', $administrativo->id_admin], 'method' => 'patch']) !!}

                        @include('administrativos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection