@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catedratico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catedratico, ['route' => ['catedraticos.update', $catedratico->id_catedratico], 'method' => 'patch']) !!}

                        @include('catedraticos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection