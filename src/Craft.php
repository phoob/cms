<?php
namespace Craft;

/**
 *
 */
class Craft extends \Yii
{
	// Edition constants
	const Personal = 0;
	const Client   = 1;
	const Pro      = 2;

	/**
	 * Determines if Craft is installed by checking if the info table exists.
	 *
	 * @Deprecated
	 * @static
	 * @return bool
	 */
	public static function isInstalled()
	{
		Craft::log('Craft::isInstalled() has been deprecated.  Use craft()->isInstalled() instead.', LogLevel::Warning);
		return craft()->isInstalled();
	}

	/**
	 * Tells Craft that it's installed now.
	 *
	 * @Deprecated
	 * @static
	 */
	public static function setIsInstalled()
	{
		Craft::log('Craft::setIsInstalled() has been deprecated.  Use craft()->setIsInstalled() instead.', LogLevel::Warning);
		craft()->setIsInstalled();
	}

	/**
	 * Returns the installed Craft version.
	 *
	 * @Deprecated
	 * @static
	 * @return string
	 */
	public static function getVersion()
	{
		Craft::log('Craft::getVersion() has been deprecated.  Use craft()->getVersion() instead.', LogLevel::Warning);
		return craft()->getVersion();
	}

	/**
	 * Returns the installed Craft build.
	 *
	 * @Deprecated
	 * @static
	 * @return string
	 */
	public static function getBuild()
	{
		Craft::log('Craft::getBuild() has been deprecated.  Use craft()->getBuild() instead.', LogLevel::Warning);
		return craft()->getBuild();
	}

	/**
	 * Returns the installed Craft release date.
	 *
	 * @Deprecated
	 * @static
	 * @return string
	 */
	public static function getReleaseDate()
	{
		Craft::log('Craft::getReleaseDate() has been deprecated.  Use craft()->getReleaseDate() instead.', LogLevel::Warning);
		return craft()->getReleaseDate();
	}

	/**
	 * Returns the Craft track.
	 *
	 * @Deprecated
	 * @static
	 * @return string
	 */
	public static function getTrack()
	{
		Craft::log('Craft::getTrack() has been deprecated.  Use craft()->getTrack() instead.', LogLevel::Warning);
		return craft()->getTrack();
	}

	/**
	 * Returns whether a package is included in this Craft build.
	 *
	 * @static
	 * @param $packageName
	 * @return bool
	 * @Deprecated Deprecated in 1.3
	 */
	public static function hasPackage($packageName)
	{
		Craft::log('Craft::hasPackage() has been deprecated.  Use craft()->hasPackage() instead.', LogLevel::Warning);
		return craft()->hasPackage($packageName);
	}

	/**
	 * Returns the site name.
	 *
	 * @Deprecated
	 * @static
	 * @return string
	 */
	public static function getSiteName()
	{
		Craft::log('Craft::getSiteName() has been deprecated.  Use craft()->getSiteName() instead.', LogLevel::Warning);
		return craft()->getSiteName();
	}

	/**
	 * Returns the site URL.
	 *
	 * @Deprecated
	 * @static
	 * @param string|null $protocol The protocol to use (http or https). If none is specified, it will default to whatever's in the Site URL setting.
	 * @return string
	 */
	public static function getSiteUrl($protocol = null)
	{
		Craft::log('Craft::getSiteUrl() has been deprecated.  Use craft()->getSiteUrl() instead.', LogLevel::Warning);
		return craft()->getSiteUrl($protocol);
	}

	/**
	 * Returns the site UID.
	 *
	 * @Deprecated
	 * @static
	 * @return string
	 */
	public static function getSiteUid()
	{
		Craft::log('Craft::getSiteUid() has been deprecated.  Use craft()->getSiteUid() instead.', LogLevel::Warning);
		return craft()->getSiteUid();
	}

	/**
	 * Returns the system time zone.
	 *
	 * @Deprecated
	 * @static
	 * @return string
	 */
	public static function getTimeZone()
	{
		Craft::log('Craft::getTimeZone() has been deprecated.  Use craft()->getTimeZone() instead.', LogLevel::Warning);
		return craft()->getTimeZone();
	}

	/**
	 * Returns whether the system is on.
	 *
	 * @Deprecated
	 * @static
	 * @return bool
	 */
	public static function isSystemOn()
	{
		Craft::log('Craft::isSystemOn() has been deprecated.  Use craft()->isSystemOn() instead.', LogLevel::Warning);
		return craft()->isSystemOn();
	}

	/**
	 * Returns whether the system is in maintenance mode.
	 *
	 * @Deprecated
	 * @static
	 * @return bool
	 */
	public static function isInMaintenanceMode()
	{
		Craft::log('Craft::isInMaintenanceMode() has been deprecated.  Use craft()->isInMaintenanceMode() instead.', LogLevel::Warning);
		return craft()->isInMaintenanceMode();
	}

	/**
	 * Enables Maintenance Mode.
	 *
	 * @Deprecated
	 * @static
	 * @return bool
	 */
	public static function enableMaintenanceMode()
	{
		Craft::log('Craft::enableMaintenanceMode() has been deprecated.  Use craft()->enableMaintenanceMode() instead.', LogLevel::Warning);
		return craft()->enableMaintenanceMode();
	}

	/**
	 * Disables Maintenance Mode.
	 *
	 * @Deprecated
	 * @static
	 * @return bool
	 */
	public static function disableMaintenanceMode()
	{
		Craft::log('Craft::disableMaintenanceMode() has been deprecated.  Use craft()->disableMaintenanceMode() instead.', LogLevel::Warning);
		return craft()->disableMaintenanceMode();
	}

	/**
	 * Returns the info model, or just a particular attribute.
	 *
	 * @Deprecated
	 * @static
	 * @param string|null $attribute
	 * @throws Exception
	 * @return mixed
	 */
	public static function getInfo($attribute = null)
	{
		Craft::log('Craft::getInfo() has been deprecated.  Use craft()->getInfo() instead.', LogLevel::Warning);
		return craft()->getInfo($attribute);
	}

	/**
	 * Updates the info row.
	 *
	 * @Deprecated
	 * @param InfoModel $info
	 * @return bool
	 */
	public static function saveInfo(InfoModel $info)
	{
		Craft::log('Craft::isInstsaveInfoalled() has been deprecated.  Use craft()->saveInfo() instead.', LogLevel::Warning);
		return craft()->saveInfo($info);
	}

	/**
	 * Returns the Yii framework version.
	 *
	 * @Deprecated
	 * @static
	 * @return mixed
	 */
	public static function getYiiVersion()
	{
		Craft::log('Craft::getYiiVersion() has been deprecated.  Use craft()->getYiiVersion() instead.', LogLevel::Warning);
		return craft()->getYiiVersion();
	}

	/**
	 * @static
	 * @param $target
	 * @return string
	 */
	public static function dump($target)
	{
		\CVarDumper::dump($target, 10, true);
	}

	/**
	 * @static
	 * @param string $alias
	 * @param bool   $forceInclude
	 * @throws \Exception
	 * @return string|void
	 */
	public static function import($alias, $forceInclude = false)
	{
		$segs = explode('.', $alias);

		if ($segs)
		{
			$firstSeg = array_shift($segs);

			switch ($firstSeg)
			{
				case 'app':
				{
					$rootPath = CRAFT_APP_PATH;
					break;
				}
				case 'plugins':
				{
					$rootPath = CRAFT_PLUGINS_PATH;
					break;
				}
				default:
				{
					throw new \Exception('Unknown alias “'.$alias.'”');
				}
			}
		}
		else
		{
			$rootPath = CRAFT_APP_PATH;
		}

		$path = $rootPath.implode('/', $segs);

		$folder = (mb_substr($path, -2) == '/*');
		if ($folder)
		{
			$path = mb_substr($path, 0, -1);
			$files = glob($path."*.php");
			if (is_array($files) && count($files) > 0)
			{
				foreach ($files as $file)
				{
					static::_importFile(realpath($file));
				}
			}
		}
		else
		{
			$file = $path.'.php';
			static::_importFile($file);

			if ($forceInclude)
			{
				require_once $file;
			}
		}
	}

	/**
	 * @static
	 * @param string $message
	 * @param array  $variables
	 * @param string $source
	 * @param string $language
	 * @param string $category
	 * @return string|null
	 */
	public static function t($message, $variables = array(), $source = null, $language = null, $category = 'craft')
	{
		// Normalize the param keys
		$normalizedVariables = array();
		if (is_array($variables))
		{
			foreach ($variables as $key => $value)
			{
				$key = '{'.trim($key, '{}').'}';
				$normalizedVariables[$key] = $value;
			}
		}

		// If this isn't set, presumably we can't connect to the database.
		if (!craft()->getIsDbConnectionValid())
		{
			$source = 'en_us';
			$language = craft()->getTranslatedBrowserLanguage();
		}

		$translation = parent::t($category, (string)$message, $normalizedVariables, $source, $language);
		if (craft()->config->get('translationDebugOutput'))
		{
			$translation = '@'.$translation.'@';
		}

		return $translation;
	}

	/**
	 * Logs a message.
	 * Messages logged by this method may be retrieved via {@link CLogger::getLogs} and may be recorded in different media, such as file, email, database, using {@link CLogRouter}.
	 *
	 * @param string $msg      message to be logged
	 * @param string $level    level of the message (e.g. 'trace', 'warning', 'error'). It is case-insensitive.
	 * @param bool   $force    Whether to force the message to be logged regardless of the level or category.
	 * @param string $category category of the message (e.g. 'system.web'). It is case-insensitive.
	 * @param string $plugin   The plugin handle that made the log call.  If null, will be set to 'craft'. Use for determining which log file to write to.
	 */
	public static function log($msg, $level = LogLevel::Info, $force = false, $category = 'application', $plugin = null)
	{
		if ((YII_DEBUG && YII_TRACE_LEVEL > 0 && $level !== LogLevel::Profile) || $force)
		{
			$traces = debug_backtrace();
			$count = 0;

			foreach ($traces as $trace)
			{
				if (isset($trace['file'], $trace['line']) && mb_strpos($trace['file'], YII_PATH) !== 0)
				{
					$msg .= "\nin ".$trace['file'].' ('.$trace['line'].')';

					if (++$count >= YII_TRACE_LEVEL)
					{
						break;
					}
				}
			}
		}

		if (craft()->isConsole())
		{
			echo $msg."\n";
		}

		if (!$plugin)
		{
			$plugin = 'craft';
		}

		static::getLogger()->log($msg, $level, $force, $category, $plugin);
	}

	/**
	 * @static
	 * @param $file
	 */
	private static function _importFile($file)
	{
		$file = str_replace('\\', '/', $file);

		// Don't add any Composer vendor files to the class map.
		if (strpos($file, '/app/vendor/') === false)
		{
			$class = __NAMESPACE__.'\\'.pathinfo($file, PATHINFO_FILENAME);
			\Yii::$classMap[$class] = $file;
		}
	}
}

/**
 * Returns the current craft() instance.  This is a wrapper function for the Craft::app() instance.
 *
 * @return WebApp|ConsoleApp
 */
function craft()
{
	return Craft::app();
}
