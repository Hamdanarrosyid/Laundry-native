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
            echo `<div style="background-color: #11ad00;padding: 10px;border-radius: 10px">
                        <p style="font-size: 16px;color: white">`.$_SESSION['message']['pesan'].`</p>
                    </div>`;
            unset($_SESSION['message']);
        }
    }
}