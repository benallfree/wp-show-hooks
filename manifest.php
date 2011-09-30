<?

$manifest = array();

/*
Your plugin almost certainly needs to respond to at least some WordPress action. If you need to respond to other types of events, uncomment or add them.
*/

$manifest['event_types'][] = 'action';
//$manifest['event_types'][] = 'filter';
//$manifest['event_types'][] = 'shortcode';



/*
Uncomment these only if your plugin requires them. If you don't need them, your plugin will be faster without them.

If you have other requirements from other Click-based modules (besides clicklib, the core), add them.
*/

//$manifest['requires'][] = 'clicklib.asset_autoloader';
//$manifest['requires'][] = 'clicklib.activerecord';
//$manifest['requires'][] = 'clicklib.haml';
//$manifest['requires'][] = 'clicklib.magick_images';
//$manifest['requires'][] = 'clicklib.attachment';