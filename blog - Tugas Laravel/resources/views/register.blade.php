<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<h1>Buat Account Baru</h1>
		<h2>Sign Up Form</h2>

        <form action="/greeting" method="post">
        @csrf
			<div id="element-form">
				<label>First Name:</label><br>
				<input type="text" name="name">
			</div><br>

			<div id="element-form">
				<label>Last Name:</label><br>
				<input type="text" name="name2">
			</div><br>

			<div id="element-form">
				<label>Gender:</label><br>
				<input type="radio" name="name" value="Male">Male
				<input type="radio" name="name" value="Female">Female
				<input type="radio" name="name" value="Other">Other
			</div><br>

			<div id="element-form">
				<label>Nationality:</label><br>
				<select id="cars" name="cars">
 					 <option value="Indonesia">Indonesia</option>
					  <option value="Malaysia">Malaysia</option>
					  <option value="Singapore">Singapore</option>
					  <option value="Australia">Australia	</option>
				</select>
			</div><br>

			<div id="element-form">
				<label>Bio :</label><br>
				<span><textarea></textarea></span>
			</div>

			<div id="element-form">
				<input type="submit" name="submit" value="Sign Up">
			</div>

		</form>
	</body>
</html>