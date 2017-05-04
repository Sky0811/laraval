<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h3>修改用户</h3>
		@include('stu.menu')
		<form action="/stu/{{ $ob->uid }}" method='post'>
		{{ csrf_field() }}
		{{ method_field('PUT') }}
			<table width='280'>
				<tr>
					<td>姓名</td>
					<td><input type="text" name='name' value="{{ $ob->name }}"></td>
				</tr>
				<tr>
					<td>年龄</td>
					<td><input type="text" name='age' value="{{ $ob->age }}"></td>
				</tr>
				<tr>
					<td>性别：</td>
					<td><input type="radio" name='sex' value='1' @if($ob->sex==1)checked @endif>男
					<input type="radio" name='sex' value='2' @if($ob->sex==2)checked @endif>女</td>
				</tr>
				<tr>
					<td colspan='2' align='center'><input type="submit" value='修改'>
					<input type="reset"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>