@extends('Admin.Includes.master')
@section('content')
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Create Category</h4>
                        </div>
                        <div class="content">
							{!! Form::open(array('url'=>'/category','method'=>'POST', 'files'=>true)) !!}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Category</label>
											{!! Form::text('category', null,array('class' => 'form-control'),'') !!}
											{{ ($errors->has('category')) ? $errors->first('category') : ''}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Type</label>
                                            {!!  Form::select('type', array('Article' => 'Article', 'Portfolio' => 'Portfolio'), 'Article',['class'=>'form-control']); !!}
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