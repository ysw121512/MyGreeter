<?php
namespace MyGreeter\Client;

class Client
{


    public function __construct()

    {
        echo '现在是: ' . date('Y-m-d H:i:s', time() + 3600),'<br>';
        $nowH = date('H', time());
        if (6 <= $nowH && $nowH < 12) {
            echo 'Good morning';
        }
        if (12 <= $nowH && $nowH < 18) {
            echo 'Good afternoon';
        }
        if ((18 <= $nowH && $nowH < 24) || (0 <= $nowH && $nowH < 6)) {
            echo 'Good evening';
        }
    }

}

$client = new Client();