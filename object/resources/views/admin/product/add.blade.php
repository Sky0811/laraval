@extends('admin.base.parent')
@section('content')
 <div class="block-area" id="text-input">
    <h3 class="block-title">添加单品</h3>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/admin1/product" method='post' enctype='multipart/form-data'>
    {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-4">
                产品图片：<input name='Product_img' type="file">
            </div>
            <div class="col-lg-4">
               产品名称：<input type="text" name='Product_name' class="form-control m-b-10" placeholder="请输入产品名称">
            </div>
            <div class="col-lg-4">
                产品描述；<input type="text" name='Product_describe' class="form-control m-b-10" placeholder="请输入产品描述">
            </div>
             <div class="col-lg-12" id="block-level">
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
        </div>
    </form>
</div>
@endsection