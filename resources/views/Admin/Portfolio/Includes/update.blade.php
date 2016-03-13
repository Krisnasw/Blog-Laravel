@extends('Admin.Includes.master')
@section('content')
    <div class="col-md-12">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card card-user">
                        <div class="image" >
                            <img src="{{ asset($portfolio->image) }}" alt="..."/>
                        </div>
                        <div class="content">
                            {!! Form::model($portfolio, ['method' => 'PATCH', 'route' => ['admin.portfolio.update', $portfolio->id],'files' => true]) !!}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Title</label>
                                            {!! Form::text('title', null,array('class' => 'form-control'),'') !!}
                                            {{ ($errors->has('title')) ? $errors->first('title') : ''}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Content</label>
                                            {!! Form::textarea('article',null, array('class' => 'form-control','id'=>'tinymce')) !!}
                                            {{($errors->has('article')) ? $errors->first('article') : ''}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Date</label>
											{!! Form::text('date', null,array('class' => 'form-control','id'=>'date','placeholder'=>'Date'),'') !!}
											{{ ($errors->has('date')) ? $errors->first('date') : ''}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Link</label>
											{!! Form::text('link', null,array('class' => 'form-control'),'') !!}
											{{ ($errors->has('link')) ? $errors->first('link') : ''}}
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label> &nbsp &nbsp

                                            {{ Form::select('category[]', array_pluck($category, 'category', 'id') , array_pluck($portfolio->category,'id'), array('id' => 'multiselect','multiple'=>'multiple')) }}

                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            {!! Form::file('image', array('class'=>'btn btn-info')) !!}
                                            {{($errors->has('image')) ? $errors->first('image') : ''}}


                                        </div>
                                    </div>
                                </div>
                                {!! Form::submit('Submit', array('class'=>'btn btn-info btn-fill pull-right')) !!}
                                <div class="clearfix">

                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
