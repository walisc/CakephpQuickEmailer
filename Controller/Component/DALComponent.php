<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/24
 * Time: 9:38 PM
 */

App::uses('Component', 'Controller');

class DALComponent extends Component
{
    public function initialize(Controller $controller)
    {
        $this->Templates = ClassRegistry::init('Templates');
    }

    public function SaveTemplate($template_name, $template_body)
    {
        $newTemplate = array(
            "date_saved" => date('Y-m-d H:i:s'),
            "template_name" => $template_name,
            "template_body" => $template_body
        );

        $this->Templates->save($newTemplate);
    }
}


