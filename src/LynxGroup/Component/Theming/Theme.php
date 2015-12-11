<?php namespace LynxGroup\Component\Theming;

use LynxGroup\Component\Odm\Document;

class Theme extends Document
{
	public function setName($name)
	{
		$this->data['name'] = $name;

		return $this->setDirty();
	}

	public function getName()
	{
		return isset($this->data['name']) ? $this->data['name'] : null;
	}

	public function setFallback($fallback)
	{
		$this->data['fallback'] = $fallback;

		return $this->setDirty();
	}

	public function getFallback()
	{
		return isset($this->data['fallback']) ? $this->data['fallback'] : 'en';
	}

	public function setTemplatePath($template_path)
	{
		$this->data['template_path'] = $template_path;

		return $this->setDirty();
	}

	public function getTemplatePath()
	{
		return isset($this->data['template_path']) ? $this->data['template_path'] : null;
	}
}

