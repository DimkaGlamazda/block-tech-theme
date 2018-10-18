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

	public static function contentURI($file_name)
	{
		return self::getImgRoot() . '/' . self::CONTENT_FOLDER . '/' . $file_name;
	}
}