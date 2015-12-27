<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/27
 * Time: 1:58 PM
 */

class QuickEmailerResponseHandler{

    const ERROR = "Error";
    const GENERAL = "General";

    public static function RESPOND($type, $response_array)
    {
        if ($type == QuickEmailerResponseHandler::ERROR) {

            //if debug 0
            return new CakeResponse(array('body' => json_encode($response_array), 'status' => 200));
        }
        elseif ($type == QuickEmailerResponseHandler::GENERAL)
        {
            return new CakeResponse(array('body' => json_encode($response_array), 'status' => 200));
        }
    }

}