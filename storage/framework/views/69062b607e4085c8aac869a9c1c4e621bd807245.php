<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo e(route('postDangKy')); ?>" method="POST" name="frmThem">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<table>
			<tr>
				<td>Môn học</td>
				<td><input type="text" name="txtMonHoc"></td>
			</tr>
			<tr>
				<td>Giá Tiền</td>
				<td><input type="text" name="txtGiaTien"></td>
			</tr>
			<tr>
				<td>Giảng viên</td>
				<td><input type="text" name="txtGiangVien"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnGui" value="Gửi"></td>
			</tr>
		</table>
	</form>
</body>
</html>