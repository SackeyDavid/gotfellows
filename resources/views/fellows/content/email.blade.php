<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<br>
	<h1>Send Mail</h1>
	<form action="{{ route('sendMail') }}" method="POST">
		{{ csrf_field() }}
		to: <input type="text" name="to">
		message: <textarea name="message" cols="30" rows="10"></textarea>
		<input type="submit" value="Send">
	</form>
</body>
</html>