<?php

require_once('captcha.php');

$captcha = new captcha();

$key = $_POST['captcha_key'];
$score = $_POST['captcha_score'];

if ($captcha->checkCaptcha($key, $score)) {
    header("Location: quiz.html");
} else {
    echo "Recaptcha echoué";
}
