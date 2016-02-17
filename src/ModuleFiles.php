<?php

namespace TMCms\Modules\Files;

use TMCms\Modules\IModule;
use TMCms\Traits\singletonInstanceTrait;

defined('INC') or exit;

class ModuleFiles implements IModule {
	use singletonInstanceTrait;

	public static $tables = [
		'files' => 'm_files'
	];

	// TODO methods for upload, path auto-generation, delete, change owner, rename, etc.
}