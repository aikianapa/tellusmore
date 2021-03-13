<fieldset class="form-fieldset form-group">
    <legend>Придумайте пароль</legend>
<div class="form-group row">
    <div class="form-group row">
        <div class="col-sm-6">
            <input type="password" class="form-control" minlength="6" placeholder="Пароль" name="password" required>
        </div>
        <div class="col-sm-6 mt-3 mt-sm-0">
            <input type="password" class="form-control" minlength="6" placeholder="Пароль повторно" name="password-confirm" required>
        </div>
    </div>
    <small>Пароль должен быть не менее 6 символов, содержать не менее одной цифры и хотя бы один символа в другом регистре</small>
</div>
</fieldset>

<div class="form-group row">
    <div class="col-12">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="check1" required>
            <label class="custom-control-label" for="check1">Согласен на обработку персональных данных
                <a href="/privacy" target="_blank">(политика)</a>
            </label>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-12">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="check2" required>
            <label class="custom-control-label" for="check2">Принимаю пользовательское соглашение
                <a href="/rules" target="_blank">(правила)</a>
            </label>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-12">
        <a class="btn btn-primary w-100" href="javascript:wbapp.auth('#signup','signup');">Подать заявку на регистрацию</a>
    </div>
</div>