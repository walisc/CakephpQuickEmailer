<?php
/**
 * Created by PhpStorm.
 * User: chidow
 * Date: 2015/12/24
 * Time: 9:38 PM
 */

App::uses('QuickEmailerBaseComponent', 'Plugin/QuickEmailer/Controller/Component');


class DALComponent extends QuickEmailerBaseComponent
{
    public function load()
    {
        if (Cache::read('qe.dbconfig_' . hash("md5", "qe_dbconfig")))
        {
            return True;
        }

        if (Configure::check('qe.dbconfig'))
        {
            if (!file_exists(APP . 'Config' . DS . 'database.php'))
            {
                return QEResp::RESPOND(QEResp::ERROR, QuickEmailerErrorDefinitions::NO_DATABASE_CONFIGURED());
            }
            try
            {
                $datasource = ConnectionManager::getDataSource(Configure::read('qe.dbconfig'));

                if ($datasource->connected) {
                    Cache::write('qe.dbconfig_' . hash("md5", "qe_dbconfig"), true);
                }
                return QEResp::RESPOND(QEResp::ERROR, QuickEmailerErrorDefinitions::NO_DATABASE_CONFIGURED());
            }
            Catch (MissingDatasourceException $e)
            {
                return QEResp::RESPOND(QEResp::ERROR, QuickEmailerErrorDefinitions::NO_DATABASE_CONFIGURED());
            }

        }
        else
        {
            return QEResp::RESPOND(QEResp::ERROR, QuickEmailerErrorDefinitions::NO_DATABASE_CONFIGURED());
        }

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


