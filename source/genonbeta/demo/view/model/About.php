<?php

namespace genonbeta\demo\view\model;

use genonbeta\controller\OutputController;
use genonbeta\database\model\mysql\MySQLLoader;
use genonbeta\database\model\sqlite3\SQLite3Loader;
use genonbeta\lang\StringBuilder;
use genonbeta\provider\ResourceManager;
use genonbeta\provider\AssetResource;
use genonbeta\system\EnvironmentVariables;
use genonbeta\util\Log;
use genonbeta\view\Pattern;
use genonbeta\view\ViewSkeleton;

use genonbeta\demo\config\DbList;
use genonbeta\demo\config\MainConfig;
use genonbeta\demo\language\Turkish;
use genonbeta\demo\view\model\pattern\GBasicSkeleton;
use genonbeta\demo\view\model\pattern\LogList;

class About extends ViewSkeleton
{
	const TAG = "About";

	public function onCreate(array $methods)
	{
		$log = new Log(self::TAG);
		$listPattern = new LogList($this);
		$aboutPattern = Pattern::getPatternFromResource(MainConfig::PATTERN_INDEX_NAME, "page_about");

		$this->loadLanguage(new Turkish());

		$this->drawPattern(new GBasicSkeleton($this), "system_html", array(GBasicSkeleton::TITLE => "About", GBasicSkeleton::BODY => $aboutPattern));
	}

	public function onOutputController()
	{
		return new OutputController();
	}
}