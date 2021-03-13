<?php

class usersClass extends cmsFormsClass {
    function beforeItemSave(&$item) {
        if (isset($item['phone'])) {
            $item['phone'] = preg_replace("/\D/", '', $item['phone']);
        }
    }

    function logto() {
        $app = $this->app;
        if ($app->apikey() && $app->vars('_sess.user_role') == 'admin') {
            $user = (object)$app->itemRead('users', $app->route->item);
            $role = (object)$app->itemRead('users', $user->role);
            if (!isset($role->active) or $role->active !== 'on' or $user->active !== 'on') {
                return json_encode(['login'=>false,'error'=>'Account is not active']);
            }
            $url = '/workspace';
            isset($role->url_login) and $role->url_login > '' ? $url = $role->url_login : null;
            unset($user->password);
            $user->token = $app->getToken();
            $_SESSION['user'] = (array)$user;
            $_SESSION['userole'] = (array)$role;
            $_SESSION['token'] = (array)$user->token;
            return json_encode(['login'=>true,'url'=>$url]);

        }
    }
}
?>
