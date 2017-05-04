<!-- 后台普通用户信息页面 -->

<!-- 继承父模板 -->
@extends('Admin.base.parent')
@section('content')

<!-- 搜索框 -->
<div class="block-area" id="inline">
    <h3 class="block-title">搜索框</h3>
    <form class="form-inline" role="form" action='/admin1/user'>
        <div class="form-group">
            <input type="text" class="form-control input-sm" id="exampleInputEmail2" placeholder="姓名：" name='User_name'>
        </div>
        <div class="form-group">
            <select name="User_sex" class='form-control input-sm'>
                <option value="">--请选择性别--</option>
                <option value="1">--男--</option>
                <option value="2">--女--</option>
            </select>
        </div>
        <button type="submit" class="btn btn-sm">搜索</button>
    </form>
</div>

    <!-- 用户信息表部分 -->
<div class="block-area" id="responsiveTable">
    <h3 class="block-title">用户信息表</h3>

    <!-- 弹出返回的操作结果 -->
    @if(session('msg'))
        <script>
            alert("{{session('msg')}}");
        </script>
    @endif
    <div class="table-responsive overflow">
        <table class="table tile">
        <form action='user' name='myform' method='post'>
            {{ csrf_field() }}
            {{ method_field('DELETE')}}
        </form>
            <thead>
                <tr>
                    <tr>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>年龄</th>
                        <th>性别</th>
                        <th>邮箱</th>
                        <th>电话</th>
                        <th>头像</th>
                        <th>操作</th>
                    </tr>
                </tr>
            </thead>
            <tbody>

            <!-- 循环遍历出用户信息 -->
            @foreach($list as $v)
                <tr>
                    <td>{{ $v->User_id }}</td>
                    <td>{{ $v->User_name }}</td>
                    <td>{{ $v->User_age }}</td>
                    <td>{{ ($v->User_sex == 1)?'男':'女' }}</td>
                    <td>{{ $v->User_email }}</td>
                    <td>{{ $v->User_tel }}</td>
                    <td ><img src="{{ url('admin/upload').'/'.$v->User_pic }}" width='50'></td>
                    <td>
                        <a href="javascript:doDel({{$v->User_id}})">删除</a>
                        <a href="/admin1/user/{{$v->User_id}}/edit">修改</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
        {{ $list->appends($where)->links() }}
    </div>
</div>

<!-- 删除用户前弹框 -->
<script>
    function doDel(id)
        {
            if(confirm('确定删除吗？'))
                {
                    var form = document.myform;
                    form.action='/admin1/user/'+id;
                    form.submit();
                }
        }
</script>
@endsection