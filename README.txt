A PHP port of Proj4js.  It seems to work about as well as Proj4js for some projections,
but I know for a fact that projections like EPSG:21781 don't.  When there's time?

Example:
--------
$transformed = Sourcemap_Proj::transform('WGS84', 'EPSG:900913', new Sourcemap_Proj_Point($x, $y));

CLI:
--------
cd sourcemap-proj
php -f cli-example.php
