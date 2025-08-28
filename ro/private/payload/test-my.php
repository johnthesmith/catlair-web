<?php
/*
    Default payload api
*/


namespace catlair;



/* Load web payload library */
require_once LIB . '/web/web_payload.php';



/*
    Api class declaration
*/
class TestMy extends WebPayload
{
    /*
        Default content
    */
    public function go()
    {
        print_r( $this -> getCaller() . PHP_EOL);
//        $this -> setContent
//        (
//            $this -> getCaller()
//        );
    }
}
