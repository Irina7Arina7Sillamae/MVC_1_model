<?php

require_once ('./controllers/CController.php');

class CView {
// 
    public function ViewMainPage(){
        $controller = new CController();
        $arrayResult = $controller->SetMainPage();
        include 'views/view_mainPage.php';
        return $arrayResult;

    }
// подключаем header
    public function GetHeader() {
        return 'views/header.php';


    }
// подключаем footer
    public function GetFooter() {
        return 'views/footer.php';
    }
}