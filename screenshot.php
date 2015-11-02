<?php
class screenshot extends Script
{
	protected $helpMessage = "'screenshot URL'\n";
	protected $description = 'Returns a screenshot of the given URL';

	public function run()
	{
		return $this->send('https://screenshotlayer.com/php_helper_scripts/scl_api_renamed.php?url=' . $this->matches[1], 'image');
	}
}
