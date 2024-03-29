<?php

// Added video/mp4 and audio/ogg to support the Podcast module on 5/2/2013
// Use this file to overwrite /libraries/icms/Utils.php on your ImpressCMS site
// Madfish.

/**
 * Different utilities used by the core
 *
 * @copyright	The ImpressCMS Project http://www.impresscms.org/
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @category	ICMS
 * @since		1.3
 * @author		marcan <marcan@impresscms.org>
 * @version		SVN: $Id: Utils.php 11448 2011-11-21 16:37:13Z fiammy $
 */

defined("ICMS_ROOT_PATH") or die("ImpressCMS root path not defined");

/**
 * icms_Utils class
 *
 * @copyright	The ImpressCMS Project http://www.impresscms.org/
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @category	ICMS
 * @subpackage	Object
 * @since		1.3
 * @author		marcan <marcan@impresscms.org>
 */
class icms_Utils {
	/**
	 * mimetypes
	 *
	 * @return   array     array of mimetypes
	 **/
	static public function mimetypes() {
		return array(
		     "hqx"		=> "application/mac-binhex40",
		     "doc"		=> "application/msword",
		     "dot"		=> "application/msword",
		     "bin"		=> "application/octet-stream",
		     "lha"		=> "application/octet-stream",
		     "lzh"		=> "application/octet-stream",
		     "exe"		=> "application/octet-stream",
		     "class"	=> "application/octet-stream",
		     "so"		=> "application/octet-stream",
		     "dll"		=> "application/octet-stream",
		     "pdf"		=> "application/pdf",
		     "ai"		=> "application/postscript",
		     "eps"		=> "application/postscript",
		     "ps"		=> "application/postscript",
		     "smi"		=> "application/smil",
		     "smil"		=> "application/smil",
		     "wbxml"	=> "application/vnd.wap.wbxml",
		     "wmlc"		=> "application/vnd.wap.wmlc",
		     "wmlsc"	=> "application/vnd.wap.wmlscriptc",
		     "xla"		=> "application/vnd.ms-excel",
		     "xls"		=> "application/vnd.ms-excel",
		     "xlt"		=> "application/vnd.ms-excel",
		     "ppt"		=> "application/vnd.ms-powerpoint",
		     "csh"		=> "application/x-csh",
		     "dcr"		=> "application/x-director",
		     "dir"		=> "application/x-director",
		     "dxr"		=> "application/x-director",
		     "spl"		=> "application/x-futuresplash",
		     "gtar"		=> "application/x-gtar",
		     "php"		=> "application/x-httpd-php",
		     "php3"		=> "application/x-httpd-php",
		     "php4"		=> "application/x-httpd-php",
		     "php5"		=> "application/x-httpd-php",
		     "phtml"	=> "application/x-httpd-php",
		     "js"		=> "application/x-javascript",
		     "sh"		=> "application/x-sh",
		     "swf"		=> "application/x-shockwave-flash",
		     "sit"		=> "application/x-stuffit",
		     "tar"		=> "application/x-tar",
		     "tcl"		=> "application/x-tcl",
		     "xhtml"	=> "application/xhtml+xml",
		     "xht"		=> "application/xhtml+xml",
		     "xhtml"	=> "application/xml",
		     "ent"		=> "application/xml-external-parsed-entity",
		     "dtd"		=> "application/xml-dtd",
		     "mod"		=> "application/xml-dtd",
		     "gz"		=> "application/x-gzip",
		     "zip"		=> "application/zip",
		     "au"		=> "audio/basic",
		     "snd"		=> "audio/basic",
		     "mid"		=> "audio/midi",
		     "midi"		=> "audio/midi",
		     "kar"		=> "audio/midi",
		     "mp1"		=> "audio/mpeg",
		     "mp2"		=> "audio/mpeg",
		     "mp3"		=> "audio/mpeg",
			 "ogg"		=> "audio/ogg",
		     "aif"		=> "audio/x-aiff",
		     "aiff"		=> "audio/x-aiff",
		     "m3u"		=> "audio/x-mpegurl",
		     "ram"		=> "audio/x-pn-realaudio",
		     "rm"		=> "audio/x-pn-realaudio",
		     "rpm"		=> "audio/x-pn-realaudio-plugin",
		     "ra"		=> "audio/x-realaudio",
		     "wav"		=> "audio/x-wav",
		     "bmp"		=> "image/bmp",
		     "gif"		=> "image/gif",
		     "jpeg"		=> "image/jpeg",
		     "jpg"		=> "image/jpeg",
		     "jpe"		=> "image/jpeg",
		     "png"		=> "image/png",
		     "tiff"		=> "image/tiff",
		     "tif"		=> "image/tif",
		     "wbmp"		=> "image/vnd.wap.wbmp",
		     "pnm"		=> "image/x-portable-anymap",
		     "pbm"		=> "image/x-portable-bitmap",
		     "pgm"		=> "image/x-portable-graymap",
		     "ppm"		=> "image/x-portable-pixmap",
		     "xbm"		=> "image/x-xbitmap",
		     "xpm"		=> "image/x-xpixmap",
			 "ics"		=> "text/calendar",
			 "ifb"		=> "text/calendar",
		     "css"		=> "text/css",
		     "html"		=> "text/html",
		     "htm"		=> "text/html",
		     "asc"		=> "text/plain",
		     "txt"		=> "text/plain",
		     "rtf"		=> "text/rtf",
		     "sgml"		=> "text/x-sgml",
		     "sgm"		=> "text/x-sgml",
		     "tsv"		=> "text/tab-seperated-values",
		     "wml"		=> "text/vnd.wap.wml",
		     "wmls"		=> "text/vnd.wap.wmlscript",
		     "xsl"		=> "text/xml",
		     "mpeg"		=> "video/mpeg",
		     "mpg"		=> "video/mpeg",
		     "mpe"		=> "video/mpeg",
			 "mp4"		=> "video/mp4",
		     "qt"		=> "video/quicktime",
		     "mov"		=> "video/quicktime",
		     "avi"		=> "video/x-msvideo",
		);
	}
}

