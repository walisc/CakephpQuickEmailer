<?php

App::uses('AppHelper', 'View/Helper');

class QuickEmailerUtilitiesHelper extends AppHelper
{
    public $helpers = array('Js');

    public function SetPostURL($form_id, $button_id, $url)
    {
        $data = $this->Js->get('#'.$form_id)->serializeForm(array('isForm' => true, 'inline' => true));

        $this->Js->get('#'. $button_id)->event('click',
            $this->Js->request(
                $url,
                array(
                    'success' => '
                    parsed_data = JSON.parse(data)

                    if (parsed_data.status_message == "Failed")
                    {
                        if (parsed_data.response_function == "show_modal")
                        {
                            $("#qe_error_model").modal("show");
                        }
                    }',
                    'data' => $data,
                    'async' => true,
                    'dataExpression'=>true,
                    'method' => 'POST'
                )
            )
        );

        return $this->Js->writeBuffer();
    }

    public function CreateErrorModal()
    {

        $modal_error_content = '<div class="modal fade" id="qe_error_model" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
                        <h4 class="modal-title" id="myModalLabel">Error Occured</h4>
                    </div>
                    <div class="modal-body">';

        $modal_error_content .= '<p>There is an error occured</p>';
        $modal_error_content .= '</div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
            </div>';

        return $modal_error_content;

    }


    public $BasicEmailFormID = "qe_basic_page_form";

}

