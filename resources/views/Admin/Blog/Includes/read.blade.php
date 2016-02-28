@extends('Admin.Includes.master')
@section('content')
	  	<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-user">
                            <div class="image" >
                                <img src="{{ asset($blog->image) }}" alt="..."/>
                            </div>
                            <div class="content">
                                <p class="typo-line text-right">

                                    @foreach ($blog->category as $data)
                                        {{ Form::label($data['category'], null, ['class' => 'btn  btn-sm disabled']) }} &nbsp
                                    @endforeach
                                    {{-- <h1>{{dd( $category::all() }}</h1> --}}
                                    {{-- <h1>{{ $blog->category }}</h1> --}}

                                </p>
                                <p class="typo-line text-center">

                                    <h1>{{ $blog->title }}</h1>
                                    <p> {{ $blog->article }} </p>
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@stop
