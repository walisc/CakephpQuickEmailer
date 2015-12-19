CakePhp Quick Emailer
===================

CakePhp Quick Emailer is a plugin to get your cakephp application emailing as fast as possible. Once installed you can access varying email views which your application can use to email straight aaway

**Version**
v1.0 - initial version


**Usage**

-- Need to download bootstrap
class AppController extends Controller {
    public $components = array('QuickEmailer.Emailer');
}


class EmailerController extends AppController
{
    public function index()
    {
        $this->Emailer->GetEmailer($this, 'advance'); //or basic
    }

}


default.ctp (using bootstrap)
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-theme.min');

	    echo $this->Html->script('jquery-2.1.4.min');
		echo $this->Html->script('bootstrap.min');
