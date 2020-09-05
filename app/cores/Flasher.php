<?php

class Flasher
{
    public static function setMessage($pesan, $action)
    {
        $_SESSION['message'] = [
            'pesan' => $pesan,
            'action' => $action,
//            'type' => $type
        ];
    }

    public static function message()
    {
        if (isset($_SESSION['message'])) {

            echo `data <strong>`.$_SESSION['message']['pesan'].`</strong> di`.$_SESSION['message']['action'];
            unset($_SESSION['message']);
        }
    }
}