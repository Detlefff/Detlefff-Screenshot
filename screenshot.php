<?php
class screenshot extends Script
{
	public function run()
	{
		return $this->send('http://screenshotlayer.com/php_helper_scripts/scl_api.php?url=' . $this->matches[1], 'image');
	}
}
