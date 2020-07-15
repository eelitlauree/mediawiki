<?php
# This file was automatically generated by the MediaWiki 1.34.2
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Test";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://localhost:8080";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@🌻.invalid";
$wgPasswordSender = "apache@🌻.invalid";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "database";
$wgDBname = "my_wiki";
$wgDBuser = "wikiuser";
$wgDBpassword = "example";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "f4abc64381e38ddaa9a6d39655c62672237ec01ce3396319aa433dda50a6a782";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "db1ad342a7ce02f3";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtensions('ExtensionName');
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'LocalisationUpdate' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'PageImages' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TextExtracts' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'WikiEditor' );


# End of automatically generated settings.
# Add more configuration options below.

#Installation of VisualEditor

wfLoadExtension( 'VisualEditor' );

// Enable by default for everybody
$wgDefaultUserOptions['visualeditor-enable'] = 1;

// Optional: Set VisualEditor as the default for anonymous users
// otherwise they will have to switch to VE
// $wgDefaultUserOptions['visualeditor-editor'] = "visualeditor";

// Don't allow users to disable it
$wgHiddenPrefs[] = 'visualeditor-enable';

// OPTIONAL: Enable VisualEditor's experimental code features
#$wgDefaultUserOptions['visualeditor-enable-experimental'] = 1;

$wgVirtualRestConfig['modules']['parsoid'] = array(
    // URL to the Parsoid instance
    // Use port 8142 if you use the Debian package
    'url' => 'http://parsoid:8000',
    // Parsoid "domain", see below (optional)
    'domain' => 'mediawiki',
    // Parsoid "prefix", see below (optional)
    'prefix' => 'mediawiki'
);

#Installation of MLEB: https://www.mediawiki.org/wiki/MediaWiki_Language_Extension_Bundle
wfLoadExtension( 'Babel' );

wfLoadExtension( 'cldr' );

wfLoadExtension( 'CleanChanges' );
$wgCCTrailerFilter = true;
$wgCCUserFilter = false;
$wgDefaultUserOptions['usenewrc'] = 1;

wfLoadExtension( 'LocalisationUpdate' );
$wgLocalisationUpdateDirectory = "$IP/cache";

wfLoadExtension( 'Translate' );
$wgGroupPermissions['user']['translate'] = true;
$wgGroupPermissions['user']['translate-messagereview'] = true;
$wgGroupPermissions['user']['translate-groupreview'] = true;
$wgGroupPermissions['user']['translate-import'] = true;
$wgGroupPermissions['sysop']['pagetranslation'] = true;
$wgGroupPermissions['sysop']['translate-manage'] = true;
$wgTranslateDocumentationLanguageCode = 'qqq';
$wgExtraLanguageNames['qqq'] = 'Message documentation'; # No linguistic content. Used for documenting messages

wfLoadExtension( 'UniversalLanguageSelector' );

#add upload file extensions pdf -->
$wgFileExtensions = array('png','gif','jpg','jpeg','webp','pdf','xlsx','webm');

#also look into the following settings
//$wgMaxUploadSize = 500000000;
//$wgMaxUploadSize = 50000000;
//$wgUploadSizeWarning - 0;
//$wgVerifyMimeType = false;
//wgMSU_userDragDrop = true;
//check the selfhost vedio
# <-- add upload file extensions pdf

//install imagick

$wgUseImageMagick = true;
$wgImageMagickConvertCommand = '/usr/bin/convert';

# part of wikipedia portal support - Define constants for my additional namespaces.
define("NS_PORTAL", 100); // This MUST be even. Must not use 100, must start from 3000
define("NS_PORTAL_TALK", 101); // This MUST be the following odd integer. Must use 3001
# part of wikipedia portal support - Add namespaces.
$wgExtraNamespaces[NS_PORTAL] = "Portal";
$wgExtraNamespaces[NS_PORTAL_TALK] = "Portal_talk"; // Note underscores in the namespace name.

#Installation of Scribunto 
//require_once "$IP/extensions/Scribunto/Scribunto.php";
wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoUseGeSHi = true;


#Installation of TemplateStyles 
wfLoadExtension( 'TemplateStyles' );

#partly for import Wikipedia Templates
$wgUseInstantCommons = true;



# Enable subpages in the main namespace
$wgNamespacesWithSubpages[NS_MAIN] = true;


#Install Cargo
wfLoadExtension( 'Cargo' );

#Install Page Form
wfLoadExtension( 'PageForms' );

#Install SubPageList3
wfLoadExtension( 'SubPageList3' );

#Install TemplateData
wfLoadExtension( 'TemplateData' );

#Install MagicNoCache
wfLoadExtension( 'MagicNoCache' );

error_reporting ( -1 );
ini_set( 'display_errors',1);

$wgAllowExternalImages = 1;

# Prevent new user registrations except by sysops
$wgGroupPermissions['*']['createaccount'] = false;


#enable DB exp function, for select exp(sum(ln(FPY/100)))*100 from cargo__SOPPerformances;
$wgCargoAllowedSQLFunctions[] = 'EXP';

$wgEditPageFrameOptions = "false";

$wgApiFrameOptions = "false";

wfLoadExtensions([
    'TextExtracts',
    'PageImages',
    'Popups'
]);
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsOptInDefaultState = '1';
$wgPopupsReferencePreviewsBetaFeature = false;

# Project Lego extensions

$wgGroupPermissions['*']['viewlinktolatest'] = false;
$wgGroupPermissions['sysop']['approverevisions'] = true;
$wgGroupPermissions['sysop']['viewlinktolatest'] = true;
$wgGroupPermissions['sysop']['viewapprover'] = true;

$wgGroupPermissions['Gatekeeper']['approverevisions'] = true;
$wgGroupPermissions['Gatekeeper']['viewlinktolatest'] = true;
$wgGroupPermissions['Gatekeeper']['viewapprover'] = true;

$wgShowExceptionDetails = true;

wfLoadExtension( 'Moderation' );