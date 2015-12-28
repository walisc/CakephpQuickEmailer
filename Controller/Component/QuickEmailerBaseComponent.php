<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/28
 * Time: 4:48 PM
 */

App::uses('Component', 'Controller');
App::uses('View', 'View');
App::uses('QuickEmailerResponseHandler', 'Plugin/QuickEmailer/Lib');
App::uses('QuickEmailerErrorDefinitions', 'Plugin/QuickEmailer/Lib');

class_alias('QuickEmailerResponseHandler', 'QEResp');


class QuickEmailerBaseComponent extends Component
{

}