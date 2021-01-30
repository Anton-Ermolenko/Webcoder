<table>
	<thead>
	<tr>
		<th>Отдел</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Gitsome</td>
		<td><button>удалить</button></td>
	</tr>
	<tr>
		<td>Linkage</td>
		<td><button>удалить</button></td>
	</tr>
	<tr>
		<td>Hicura</td>
		<td><button>удалить</button></td>
	</tr>
	<tr>
		<td>Lavistaro</td>
		<td><button>удалить</button></td>
	</tr>
	</tbody>
</table>
<h3>Добавить отдел</h3>
<form>
	<p>
		<label for="password">Название отдела</label>
		<br/>
		<input type="text" name="department"/>
	</p>
	<p>
		<button type="submit">
			Добавить отдел
		</button>
	</p>
</form>

CREATE TABLE users ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, email VARCHAR(50) NOT NULL UNIQUE, name VARCHAR(255) , address VARCHAR(255), phone VARCHAR(255), comments VARCHAR(255), department VARCHAR(255) )