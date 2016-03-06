@extends('Admin.Includes.master')
@section('content')
	  	<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-user">
                            <div class="image" >
                                <img src="{{ asset($portfolio->image) }}" alt="..."/>
                            </div>
                            <div class="content">
                                <p class="typo-line text-right">
                                    @foreach ($portfolio->category as $data)
                                        {{ Form::label($data['category'], null, ['class' => 'btn  btn-sm disabled']) }} &nbsp
                                    @endforeach
                                </p>
                                <p class="typo-line text-center">

                                    <h1>{!! $portfolio->title !!}</h1>
                                    <p> {!! $portfolio->article !!} </p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-10"> 
                                            {{ link_to($portfolio->link , $title = $portfolio->title ,$attributes = array('target'=>'_blank'),$secure = null) }}

                                        </div>
                                        <div class="col-md-2">
                                            <p style="text-align: right;">{!! $portfolio->date !!}</p>
                                        </div>
                                    </div>
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@stop
