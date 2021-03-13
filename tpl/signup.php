<!DOCTYPE html>
<html lang="en">
<wb-var assets="/modules/yonger/tpl/assets" />
<wb-include wb-tpl="head.inc.php" />

<body class="bg-light">


    <wb-include wb-tpl="signhead.inc.php" />

    <div class="content content-fixed content-auth">
        <div class="container">
            <div class="ht-100p">

                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h1 class="display-4">Регистрация</h1>
                        <p class="lead tx-14">Ваш аккаунт будет активирован после проверки данных</p>
                    </div>
                </div>
                <div class="row  justify-content-center mt-2">
                    <div class="col-md-6">
                        <form class="tx-14" id="signup">
                            <fieldset class="form-fieldset signup-form">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <select wb-tree="item=dict&branch=regtypes&parent=false" name="type" required class="custom-select" placeholder="Ваш юридический статус">
                                            <option value="{{id}}" data-form="users/reg_{{id}}">{{name}}</option>
                                        </select>
                                    </div>
                                </div>

                                <wb-module wb="module=subform&form=subject&watch=[name=type]" />

                            </fieldset>
                            <div class="signup-error alert alert-danger text-center mt-3 d-none">
                                Не удалось выполнить регистрацию пользователя.<br>Возможно, такой пользователь уже существует.
                            </div>
                            <div class="signup-success alert alert-success text-center mt-3 d-none">
                                <p>Вы успешно зарегистрировались и можете войти в систему.</p>
                                <a class="btn btn-primary w-50" href="/signin">Войти</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- media -->
        </div>
        <!-- container -->
    </div>
    <!-- content -->

    <footer class="footer">
        <div>
            <span>&copy; 2021 Tellusmore v1.0.0. </span>
            <span>Created by
                <a href="http://digiport.ru" target="_blank">Digiport</a>
            </span>
        </div>
        <div>
            <nav class="nav">
                <a href="/privacy" class="nav-link">Политика</a>
                <a href="/rules" class="nav-link">Правила</a>
                <a href="/" class="nav-link">Главная</a>
            </nav>
        </div>
    </footer>

    <wb-include wb-snippet="wbapp" />
    <wb-include wb-tpl="scripts.inc.php" />
</body>

</html>