A PHP port of Proj4js.  It seems to work about as well as Proj4js, though I
can't vouch for all the projections.  I know for a fact that projections
like EPSG:21781 don't.

Example:
--------
$transformed = Sourcemap_Proj::transform('WGS84', 'EPSG:900913', new Sourcemap_Proj_Point($x, $y));

CLI:
--------
cd sourcemap-proj
php -f cli-example.php
