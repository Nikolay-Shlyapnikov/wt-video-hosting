<?php

/** @var yii\web\View $this */

?>
<div class="container main-page__container">
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">Логин</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="chanel" class="form-label">Название канала</label>
            <input type="text" class="form-control" id="chanel">
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Загрузите фото канала</label>
            <input class="form-control" type="file" id="avatar">
        </div>
        <div class="mb-3">
            <select class="form-select" name="age">
                <option selected>Откройте это меню выбора</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
