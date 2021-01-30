
<table>
	<thead>
	<tr>
		<th>Отдел</th>
	</tr>
	</thead>
	<tbody>

    <?    foreach ($result as $departments) {
        ?> <tr> <?
		foreach ($departments as $key => $value) {
		    if ($key === 'department' ){
		      ?>
                <td><?=$value?></td>
                <td><a href="/departments/?delete=<?=$value;?>"><button>удалить</button></a></td>
                <?
			}else
			    continue;

			}
		}
		?>
	</tr>
	</tbody>
</table>

</br>
<h3>Добавить отдел</h3>
<form>
	<p>
		<label for="password">Название отдела</label>
		<br/>
		<input type="text" name="add"/>
	</p>
	<p>
		<button type="submit">
			Добавить отдел
		</button>
	</p>
</form>

