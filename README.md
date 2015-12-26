CakePhp Quick Emailer
===================

CakePhp Quick Emailer is a plugin to get your cakephp application emailing as fast as possible. Once installed you can access varying email views which your application can use to email straight aaway

**Version**
v1.0 - initial version


**Usage**

class AppController extends Controller {
        public $helpers = array('QuickEmailer.QuickEmailerUI'); // helper to access graphical elements
        public $components = array('QuickEmailer.QuickEmailerAPI'); // Main API to access most methods
}

-- Using the QuickEMailer UI

- In whichever view:-
echo $this->QuickEmailerUI->GetEmailer('basic'); //or advance, to have the WSGYI textbox

-- Using the QuickEmailer API


-- Need to download bootstrap, and jquery
default.ctp (using bootstrap)
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-theme.min');

	    echo $this->Html->script('jquery-2.1.4.min');
		echo $this->Html->script('bootstrap.min');
