<div>
<div class="form-group row">
    <div class="col-12">
        <input type="text" class="form-control" placeholder="Наименование" name="name">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-4 mb-3">
        <input type="text" class="form-control" placeholder="ИНН" name="inn">
    </div>
    <div class="col-sm-4 mb-3">
        <input type="text" class="form-control" placeholder="КПП" name="kpp">
    </div>
    <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="ОГРН" name="ogrn">
    </div>
</div>

<div class="form-group row">
    <label class="form-control-label"></label>
    <div class="col-12">
        <input type="text" class="form-control" placeholder="Юридический адрес" name="address_jur">
    </div>
</div>

<div class="form-group row">
    <div class="col-12">
        <input type="text" class="form-control" placeholder="Фактический адрес" name="address">
    </div>
</div>

<wb-include wb="form=users&mode=reg_bank.inc" />

<div class="form-group row">
    <div class="col-12">
        <input type="text" class="form-control" placeholder="Адрес сайта" name="site">
    </div>
</div>

<div class="form-group row">
    <div class="col-12">
        <input type="email" class="form-control" placeholder="Адрес электронной почты" name="email" required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12">
        <input type="phone" class="form-control" placeholder="Номер телефона" name="phone" required wb="module=mask" wb-mask="(999) 999-99-99">
    </div>
</div>

<wb-include wb="form=users&mode=reg_common.inc" />


</div>
