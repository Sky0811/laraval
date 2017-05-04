@extends('admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">单品管理列表</h3>
        @if(session('msg'))
            <div class="alert alert-success alert-icon">
            {{ session('msg') }}
            <i class="icon"></i>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-icon">
            {{ session('error') }}
            <i class="icon"></i>
            </div>
        @endif
        <div class="table-responsive overflow">
        <form action="/admin1/product" method='post' name='myform'>
            {{ csrf_field()}}
            {{ method_field('DELETE')}}
        </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>产品图片</th>
                        <th>产品名称</th>
                        <th>产品描述</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach( $list as $v)
                    	<tr>
	                        <td>{{$v->Product_id}}</td>
	                        <td><img src="{{ url('admin/upload').'/'.'s_'.$v->Product_img}}" with="50px"></td>
	                        <td>{{$v->Product_name}}</td>
	                        <td>{{$v->Product_describe}}</td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->Product_id}})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin1/product/{{ $v->Product_id}}/edit'>修改</a>
	                        </td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        function doDel(id)
        {
            if(confirm('确定删除吗？')){
                var form=document.myform;
                form.action='/admin1/product/'+id;
                form.submit();
            }
        }
    </script>
@endsection