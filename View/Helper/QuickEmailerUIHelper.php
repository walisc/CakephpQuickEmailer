<?php

App::uses('AppHelper', 'View/Helper');

class QuickEmailerUIHelper extends AppHelper
{

    public function GetEmailer($type='basic')
    {
        $this->_View->set(array('type' => $type));
        return $this->_View->render('QuickEmailer.Emailer/emailer_layout', $layout=false);
    }


    public function GetEmailModularPage()
    {

    }




}
