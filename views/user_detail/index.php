<?php

foreach (array_shift($result) as $key => $value){
	switch ($key){
		case "email":
			$email = $value;
			break;

		case "name":
			$name = $value;
			break;

		case "address":
			$address = $value;
			break;

		case "phone":
			$phone = $value;
			break;

		case "comments":
			$comments = $value;
			break;

		case "department":
			$department = $value;
			break;

		default:
			break;
	}
    }
?>
<table>
	<thead>
	<tr>
		<th>email</th>
		<th>Имя пользователя</th>
		<th>Адрес пользователя</th>
		<th>Телефон</th>
		<th>Комментарии</th>
		<th>Отдел</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?=$email?></td>
		<td><?=$name?></td>
		<td><?=$address?></td>
		<td><?=$phone?></td>
		<td><?=$comments?></td>
		<td><?=$department?></td>

	</tr>

	</tbody>
