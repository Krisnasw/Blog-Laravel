@extends('Admin.Includes.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <nav class="pull-left">
                    <h4 class="title">Category</h4>
                    <p class="category">Untuk Posting Blog ...</p>
                </nav>
                <nav class="pull-right">
                    {!! link_to_route('admin.category.create', 'Tambah Category',$parameters = array() , array('class'=>'btn btn-primary btn-block')); !!}
                </nav>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th width="1%" >No</th>
                        <th width="40%" >Nama Category</th>
                        <th width="39%" >Type Category</th>
                        <th width="20%" >Action</th>
                    </thead>
                      <?php $x = 1; ?>
                    <tbody>
                        @foreach($category as $data)
                          {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('admin.category.destroy', $data->id))) !!}
                        <tr>
                            <td>{{$x++}}</td>
                            <td>{{substr($data->category, 0,50)}}</td>
                            <td>{{substr($data->type, 0,160)}}</td>
                            <td>
                                <a href="{{ url('admin/category') }}/{{ $data->id }}/edit" class="btn" >
                                    <i class="pe-7s-pen " style="font-size: 20px; color:#2CC36B;"></i>
                                </a>
                                {!! Form::submit("Del", array('class' => 'btn')) !!}
                            </td>
                        </tr>
                        {!! Form::close() !!}
                        @endforeach
                    </tbody>
                </table>
                <nav class="pull-right">
                  {!! $category->links() !!}
                </nav>
            </div>
        </div>
    </div>
@stop
