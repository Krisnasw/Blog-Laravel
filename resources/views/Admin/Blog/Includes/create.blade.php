@extends('Admin.Includes.master')
@section('content')
    <div class="col-md-12">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Create Post</h4>
                        </div>
                        <div class="content">
							{!! Form::open(array('url'=>'admin/blog','method'=>'POST', 'files'=>true)) !!}
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
                                            {{ Form::textarea('article',null, array('class' => 'form-control','id'=>'tinymce')) }}
                                            {{($errors->has('article')) ? $errors->first('article') : ''}}
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label> &nbsp &nbsp
                                            <select id="multiselect" name="category[]" multiple="multiple">
                                                @foreach($category as $data)
                                                    <option value="{{ $data->id }}">{{ $data->category }}</option>
                                                @endforeach
                                            </select>
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
