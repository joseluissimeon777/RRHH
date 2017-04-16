@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          @foreach($items as $item)

            <div class="panel panel-primary">
                <div class="panel-heading">{{$item->nombre}}</div>

                <div class="panel-body">
                {{$item->descripcion}}

                 </div>
                <div class="panel-footer">

                    {{Form::open(['url'=>'home/edit','method'=>'GET'])}}
                    {{Form::hidden('id',$item->id)}}
                    {!!Form::submit('Editar',['class'=>'btn btn-block'])!!}


                    </div>

            </div>
         @endforeach





        </div>

            </div>






        </div>

@endsection
