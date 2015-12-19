Issue setting up

-> Get helper to be picked up
-- Problem was with not instantiating it right. Correct way public $helpers = array('QuickEmailer.QuickEmailerUI'); It's not a name value instantiating