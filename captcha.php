<?php

class captcha
{
    const score = 3;
    const public_key = 'nuitdinfo2022';
    const passphrase = 'nuitdinfo2022';

    public function checkCaptcha($public_key, $score)
    {
        if ($public_key == self::public_key) {
            if ($score >= self::score) {
                return true;
            }
        }
        return false;
    }
}
