<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/18
 * Time: 4:24 PM
 */


App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class EmailController extends AppController
{
    public function ProcessSend()
    {
    }

    public function ProcessSaveAsTemplate()
    {
        return $this->QuickEmailerAPI->SaveAsTemplate("chido", "<h1>test</h1>");
    }

}
