<?php

namespace services;



use models\UserModel;

class LoginService
{

    public function saveUser() {
        $user = new UserModel();
        $user->username = 'zhyy';
        $user->password = md5('zhyy');
        $result = $user->save();
        print_r($result);
    }

    public function getAllUser() {
        $user = new UserModel();
        $userInfo = $user::all();
        echo '<pre>';
        print_r($userInfo->toArray());
    }

}