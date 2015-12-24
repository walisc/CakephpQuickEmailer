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
        $this->DAL->SaveTemplate($template_name, $template_body);

    }


}