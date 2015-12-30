<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/27
 * Time: 1:58 PM
 */

class QuickEmailerErrorDefinitions{

    public static function NO_DATABASE_CONFIGURED()
    {
        return array(
            'status_message' => 'Failed',
            'message_summary' => "Database not Configured",
            'message_content' => "The Database for the applticaion has not been configured properly. Please make sure your application
         has a database connection configured. Also also make sure you the database configuration name is identified in the QuickEmailer config",
            'response_function' => 'show_modal'
        );

    }

}