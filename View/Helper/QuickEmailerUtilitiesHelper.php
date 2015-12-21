<?php

App::uses('AppHelper', 'View/Helper');

class QuickEmailerUtilitiesHelper extends AppHelper
{
    public $helpers = array('Js');

    public function SetPostURL($form_id, $button_id, $url)
    {
        $this->Js->get('#'. $button_id)->event('click',
            $this->Js->request(
                $url,
                array(
                    'success' => 'location.reload();',
                    'data' => $this->Js->get('#'.$form_id)->serializeForm(array('isForm' => true, 'inline' => true)),
                    'async' => true,
                    'dataExpression'=>true,
                    'method' => 'POST'
                )
            )
        );

        return $this->Js->writeBuffer();
    }
}
