<?php namespace LynxGroup\Component\Theming;

use LynxGroup\Component\Odm\Repository;

class ThemeRepository extends Repository
{
	public function setTheme(Theme $theme)
	{
		$this->globals['theme'] = $theme->getId();
	}

	public function getTheme()
	{
		return isset($this->globals['theme']) ? $this->load($this->globals['theme']) : null;
	}
}
