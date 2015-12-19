<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/19
 * Time: 8:45 PM
 */

App::uses('Component', 'Controller');
App::uses('View', 'View');

class EmailerComponent extends Component
{

    public function GetEmailer($parent, $type='Basic')
    {
       $parent->render('QuickEmailer.Emailer/emailer_layout');
    }

}