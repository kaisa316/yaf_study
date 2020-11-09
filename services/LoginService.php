<?php

namespace services;



use models\UserModel;

class LoginService
{

    public function saveUser() {
        echo "this is service";
    }

    public function getAllUser() {
        $user = new UserModel();
        $userInfo = $user::all();
        echo '<pre>';
        print_r($userInfo->toArray());
    }
}