<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/19
 * Time: 8:45 PM
 */

App::uses('Component', 'Controller');
App::uses('View', 'View');

class QuickEmailerAPIComponent extends Component
{
    public $components = array('QuickEmailer.DAL');

    public function SendEmail()
    {

    }

    public function SaveAsDraft()
    {

    }

    public function SaveAsTemplate($template_name, $template_body)
    {
        //do name and body checks
        //$this->DAL->SaveTemplate($template_name, $template_body);
        return $this->CreateProcessingResponse("Failed", "this failed");
    }

    private function CreateProcessingResponse($status, $message) //status - failed/passed. $response_function - reload/info Modal/flash/redrect/null
    {
        if ($status == "Failed")
        {
            return new CakeResponse(array('body'=> json_encode(array('message_content' => $message, 'status_message'=> $status, 'response_function'=>'show_modal')),'status'=>200));
        }

    }


}