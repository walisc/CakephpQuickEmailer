<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/19
 * Time: 8:45 PM
 */

App::uses('QuickEmailerBaseComponent', 'Plugin/QuickEmailer/Controller/Component');

class QuickEmailerAPIComponent extends QuickEmailerBaseComponent
{
    public $components = array('QuickEmailer.DAL');

    public function SendEmail()
    {

    }

    public function SaveAsDraft()
    {

    }

    public function ClearQuickEmailerCache()
    {
        Cache::clear(false, QuickEmailerResponseHandler::QUICK_EMAILER_CACHE);
    }
    
    public function SaveAsTemplate($template_name, $template_body)
    {
        $checks = $this->DAL->load();
        if($checks instanceof CakeResponse)
        {
            return $checks;
        }
        //do name and body checks
        $this->DAL->SaveTemplate($template_name, $template_body);

    }



}