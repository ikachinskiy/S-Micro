<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 28.09.18
 * Time: 0:09
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MicroController
{
 /**
  * @Route("/")
  */
    public function number() {
        $number = random_int(0, 100);
        return new Response(
          '<html><body>Счастливое число: '.$number.'</body></html>'
        );
    }
}