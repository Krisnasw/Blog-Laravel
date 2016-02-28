@extends('Admin.Includes.master')
@section('content')
    <div class="col-md-12">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card card-user">
                        <div class="image" >
                            <img src="{{ asset($blog->image) }}" alt="..."/>
                        </div>
                        <div class="content">
                            {!! Form::model($blog, ['method' => 'PATCH', 'route' => ['blog.update', $blog->id],'files' => true]) !!}
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
                                            {!! Form::textarea('article',null, array('class' => 'form-control')) !!}
                                            {{($errors->has('article')) ? $errors->first('content') : ''}}

                                        </div>

                                        <div class="form-group">
                                            <label>Category</label> &nbsp &nbsp

                                            {{ Form::select('category[]', array_pluck($category, 'category', 'id') , array_pluck($blog->category,'id'), array('id' => 'multiselect','multiple'=>'multiple')) }}

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
