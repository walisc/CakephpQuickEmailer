<?php

App::uses('AppHelper', 'View/Helper');

class QuickEmailerUIHelper extends AppHelper
{

    public function GetEmailer($parent, $type='basic')
    {
        $this->_View->set(array('type' => $type));
        return $this->_View->render('QuickEmailer.Emailer/emailer_layout', $layout=false);
       //return $this->_View->element('Emailer/emailer_layout', , array('plugin' => 'QuickEmailer'));
    }


    public function GetEmailModularPage()
    {

    }
}
