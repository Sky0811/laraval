@extends('admin.base.parent')
@section('content')
 <div class="block-area" id="text-input">
    <h3 class="block-title">修改产品</h3>
    <form action="/admin1/product/{{ $list->Product_id}}" method='post' enctype='multipart/form-data'>
    {{ csrf_field()}}
    {{ method_field('PUT')}}
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ url('admin/upload').'/'.'s_'.$list->Product_img}}">
                <input type="file" name='Product_img'>
            </div>
                <input type="hidden" name='Product_img1' value="{{$list->Product_img}}">
            <div class="col-lg-4">
                <input type="text" name='Product_name' class="form-control m-b-10" value="{{$list->Product_name}}">
            </div>
            <div class="col-lg-4">
                <input type="text" name='Product_describe' class="form-control m-b-10" value="{{$list->Product_describe}}">
            </div>
             <div class="col-lg-12" id="block-level">
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
        </div>
    </form>
</div>
@endsection