<?php

namespace app\controllers;

use app\models\User;
use app\models\forms\LoginForm;
use app\models\forms\SignupForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class UserController extends Controller
{
    public function actionLogin()
    {
        $loginForm = new LoginForm();

        if ($loginForm->load(Yii::$app->request->post())) {
            if ($loginForm->validate()) {
                Yii::$app->user->login(User::findOne(['email' => $loginForm->email]));

                return $this->goHome();
            }
        }

        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function actionLogout(): Response
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionProfile(): string
    {
        return $this->render('profile');
    }

    public function actionSignup()
    {
        $signupForm = new SignupForm();

        if ($signupForm->load(Yii::$app->request->post())) {
            if ($signupForm->validate()) {
                return $this->redirect(['user/login']);
            }
        }

        return $this->render('signup', [
            'model' => $signupForm
        ]);
    }
}