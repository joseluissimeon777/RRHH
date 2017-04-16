@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{$item->nombre}}
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">

                    {!! Form::open(['url' =>'home/update', 'method' => 'patch']) !!}
                    <!-- Descripcion Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {{Form::hidden('id',$item->id)}}
                        {!! Form::label('desc', 'Descripcion:') !!}
                        {!! Form::textarea('descripcion',$item->descripcion, ['class' => 'form-control']) !!}

                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{!! url('home') !!}" class="btn btn-default">Cancel</a>
                    </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection