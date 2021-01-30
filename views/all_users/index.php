
<table>
    <thead>
    <tr>
        <th>Пользователь</th>
        <th>Отдел</th>
    </tr>
    </thead>
    <tbody>
<?php
foreach ($result as $user) {
    ?> <tr> <?
        foreach ($user as $key => $value) {
            switch ($key){
                case "name":
                    $name = $value;
                    break;

                case "department":
                    $department = $value;
                    break;

				case "id":
					$id = $value;
					break;

                default:
                    break;
			}
		}
	?>
        <td><a href="/user_detail/<?=$id;?>"> <?=$name?></a></td>
        <td><?=$department?></td>
    </tr>
    <?
}
?>
	</tbody>
</table>