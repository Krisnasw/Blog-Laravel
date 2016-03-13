@extends('Admin.Includes.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <nav class="pull-left">
                    <h4 class="title">Portfolio</h4>
                    <p class="category">Untuk Posting Portfolio ...</p>
                </nav>
                <nav class="pull-right">
                    {{-- {!! link_to_route('admin.portfolio.create', 'Tambah Portfolio',$parameters = array() , array('class'=>'btn btn-primary btn-block')); !!} --}}
                    {!! link_to_route('admin.portfolio.create', 'Tambah Portfolio',$parameters = array() , array('class'=>'btn btn-primary btn-block')); !!}
                </nav>
            </div>
            <div class="content table-responsive table-full-width">
                <br><br>
            </div>
        </div>
    </div>
    <div class="col-md-12">
            <div class="row">
            @foreach($portfolio as $data)
                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('admin.portfolio.destroy', $data->id))) !!}
                {{-- {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('admin.portfolio.destroy', $data->id))) !!} --}}
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">{!! $data->title !!}</h4>

                        </div>
                        <div class="content">
                            <div class="image">
                                <img src="{{ asset($data->image) }}"/>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <p class="category">
                                        @foreach ($data->category as $cat)
                                        {{ Form::label($cat['category'], null, ['class' => 'btn btn-xs disabled']) }} &nbsp
                                        @endforeach
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <p class="category" style="text-align: right;">{{$data->date}}
                                    </p>
                                </div>
                            </div>

                        </div>
                        <hr style="margin-bottom: 0px;margin-top: 0px;">
                        <div class="text-center">
                            <br>
                            <a href="{{ url('admin/portfolio') }}/{{ $data->id }}" class="btn btn-success btn-sm btn-fill " >
                                Detail
                            </a>
                            <a href="{{ url('admin/portfolio') }}/{{ $data->id }}/edit" class="btn  btn-fill  btn-info btn-sm" >
                                Update
                            </a>
                            {!! Form::submit("Delete", array('class' => 'btn btn-danger btn-fill  btn-sm')) !!}
                            <br>
                             &nbsp
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            @endforeach

            </div>
            {!! $portfolio->links() !!}
    </div>
@stop
