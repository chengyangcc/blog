<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生</title>
</head>
<body>
	<table border="1" cellspacing="0">
		<tr>
			<td>Id</td>
			<td>姓名</td>
			
			<td>性别</td>
			<td>年龄</td>
		</tr>
		@foreach($data as $v)
		<tr>
			<td>{{$v->g_id}}</td>
			<td>{{$v->g_name}}</td>
			<td>{{$v->g_age}}</td>
			<td>{{$v->g_sex}}</td>
			
		</tr>
		@endforeach
	</table>
</body>
</html>