
<form>
        <p>
            <label>email</label>
            <br/>
            <input type="text" name="email" required/>
        </p>
        <p>
            <label>Имя пользователя</label>
            <br/>
            <input type="text" name="name" required/>
        </p>
        <p>
            <label>Адрес пользователя</label>
            <br/>
            <input type="text" name="address"/>
        </p>
        <p>
            <label>Телефон</label>
            <br/>
            <input type="text" name="phone"/>
        </p>
        <p>
            <label>Комментарии</label>
            <br/>
            <input type="text" name="comments"/>
        </p>
        <p>
            <label>Отдел</label>
            <br/>
            <select name="department">
                <? foreach ($result as $departments) {
				foreach ($departments as $key => $value) {
				if ($key === 'department' ){
				?>
                <option value = "<?=$value;?>" > <?=$value;?> </option >
                <?
			}else
			    continue;

			}
		}?>
            </select>
        </p>
        <p>
            <button type="submit">
	Добавить сотрудника
</button>
        </p>
    </form>