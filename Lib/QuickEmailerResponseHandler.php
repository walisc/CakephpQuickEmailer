<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/27
 * Time: 1:58 PM
 */

class QuickEmailerResponseHandler
{

    const ERROR = "Error";
    const GENERAL = "General";

    private static function GetGenericMessage()
    {
        return array(
            'status_message' => 'Failed',
            'message_summary' => "Ops! Something went wrong:(",
            'message_content' => "Please try refresh the page. If that doesn't work, please try again later or contact the site Administrator",
            'response_function' => 'show_modal'
        );
    }

    public static function RESPOND($type, $response_array)
    {
        if ($type == QuickEmailerResponseHandler::ERROR) {

            if (Configure::read("debug") != 0) {
                return new CakeResponse(array('body' => json_encode($response_array), 'status' => 200));
            }
            else
            {
                return new CakeResponse(array('body' => json_encode(QuickEmailerResponseHandler::GetGenericMessage()), 'status' => 200));
            }
        }
        elseif ($type == QuickEmailerResponseHandler::GENERAL)
        {
            return new CakeResponse(array('body' => json_encode($response_array), 'status' => 200));
        }
    }

    public static function AddExceptionInfo($exceptionDefinition, $e)
    {
        $error_details = $exceptionDefinition;
        $error_details["message_content"] .= sprintf("</br></br><p><strong>Exception Message</strong></p></br>%s</br></br><p><strong>Stace Trace</strong></p></br>%s",$e->getMessage(),$e->getTraceAsString());

        return $error_details;
    }

    const QUICK_EMAILER_CACHE = "quick_emaler_cache";

}