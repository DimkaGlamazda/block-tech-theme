<?php

class Media
{
	const IMAGE_ROOT = 'media';

	private static function getImgRoot()
	{
		return get_template_directory_uri() . '/' . self::IMAGE_ROOT;
	}

	const ICONS_FOLDER = 'icons';

	public static function iconURI($file_name)
	{
		return self::getImgRoot() . '/' . self::ICONS_FOLDER . '/' . $file_name;
	}

	const CONTENT_FOLDER = 'content';
	const MOBILE_CONTENT_FOLDER = 'mobile_content';

	public static function contentURI($file_name)
	{
		if(wp_is_mobile())
		{
			$file = self::getImgRoot() . '/' . self::MOBILE_CONTENT_FOLDER . '/' . $file_name;

			if(file_exists( get_template_directory() . '/' . self::IMAGE_ROOT . '/' . self::MOBILE_CONTENT_FOLDER . '/' . $file_name))
				return $file;
		}

		return self::getImgRoot() . '/' . self::CONTENT_FOLDER . '/' . $file_name;
	}

	const STAFF_FOLDER = 'staff';

	public static function staffURI($file_name)
	{
		return self::getImgRoot() . '/' . self::STAFF_FOLDER . '/' . $file_name;
	}
}