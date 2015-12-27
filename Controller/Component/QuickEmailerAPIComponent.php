<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/19
 * Time: 8:45 PM
 */

App::uses('Component', 'Controller');
App::uses('View', 'View');
App::uses('QuickEmailerResponseHandler', 'Plugin/QuickEmailer/Lib');
App::uses('QuickEmailerErrorDefinitions', 'Plugin/QuickEmailer/Lib');

class_alias('QuickEmailerResponseHandler', 'QERes');

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
        return QERes::RESPOND(QERes::ERROR, QuickEmailerErrorDefinitions::NO_DATABASE_CONFIGURED());
    }

    private function CreateProcessingResponse($status, $message_summary, $message_content, $response_function) //status - failed/passed. $response_function - reload/info Modal/flash/redrect/null
    {

            return new CakeResponse(array('body'=> json_encode(array('message_summary' => $message_summary,
                'message_content' => $message_content,
                'status_message'=> $status,
                'response_function'=>$response_function)),'status'=>200));


    }


}