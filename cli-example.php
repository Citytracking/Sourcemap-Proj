<?php

function sourcemap_proj_autoload($cls) {
    $p = explode('_', strtolower($cls));
    $p = '.'.DIRECTORY_SEPARATOR.implode(DIRECTORY_SEPARATOR, $p).'.php';
    if(file_exists($p)) {
        include($p);
        return true;
    }
    return false;
}

spl_autoload_register('sourcemap_proj_autoload');

if(php_sapi_name() == 'cli') {
    // from http://trac.osgeo.org/proj4js/browser/trunk/test/testdata.js?format=txt
/*    $test_data = array( 
        array(
            'code' => 'EPSG:3035',
            'xy' => array(4388138.60, 3321736.46),
            'll' => array(11.0, 53.0)
        ),
        array('code' => 'EPSG:23030',
            'xy' => array(168035.13,4199884.83,-216.62),
            'll' => array(-6.77432123185356, 37.88456231505968)   
        ), 
        array('code' => 'EPSG:29100',
            'xy' => array(5110899.06,10552971.81,-22.99),
            'll' => array(-53.0, 5.0,0.0)   
        ),
        array('code' => 'EPSG:27700',
            'xy' => array(343733.14, 612144.53, -51.89),
            'll' => array(-2.89, 55.4, 0)   
        ),
        array('code' => 'EPSG:27492',
            'xy' => array(25260.493584, -9579.245052),
            'll' => array(-7.84, 39.58)
        ),
        array('code' => 'EPSG:3411',
            'xy' => array(1070076.44,-4635010.27,-136.63), 
            'll' => array(-32, 48, 0)
        ),
        array('code' => 'EPSG:2403',
            'xy' => array(27500000.00,   4198690.08, -109.02),
            'll' => array(81, 37.92, 0) 
        ),
        array('code' => 'EPSG:21781',
            'xy' => array(660389.52, 185731.63, -49.23), 
            'll' => array(8.23, 46.82, 0)
        ),
        array('code' => 'EPSG:27563',
            'xy' => array(653704.865208, 176887.660037),
            'll' => array(3.005, 43.89)
        ),
        array('code' => 'EPSG:54029',
            'xy' => array(1094702.50,6496789.74,-6468.21),
            'll' => array(11.0, 53.0,0.0)
        ),
        array('code' => 'EPSG:54003',
            'xy' => array(1223145.57,6491218.13,-6468.21),
            'll' => array(11.0, 53.0)
        ),
        array('code' => 'EPSG:3573',
            'xy' => array(2923052.02009, 1054885.46559),
            'll' => array(9.84375, 61.875)
        ),
        array('code' => 'EPSG:54009',
            'xy' => array(-10617602.79013849,4108337.84708608,0.00000000 ), 
            'll' => array(-119,34,0)
        ),

        array('code' => 'EPSG:31466',
            'xy' => array(2547685.01212,5699155.7345),
            'll' => array(6.685,51.425)
        ),
        array('code' => 'EPSG:54008',
            'xy' => array(738509.49,5874620.38),
            'll' => array(11.0, 53.0)
        ),
        array('code' => 'EPSG:2057',
            'xy' => array(-11608322.26,18282612.23,-281.67),
            'll' => array(-53.0, 5.0,0.0)
        ),
        array('code' => 'EPSG:54009',
            'xy' => array(804759.21,6164983.82,-13598.03),
            'll' => array(11.0, 53.0, 0.0)
        ),
        array('code' => 'EPSG:3035',
            'xy' => array(4388138.60, 3321736.46),
            'll' => array(11.0, 53.0)
        ),
        array('code' => 'EPSG:102026',
            'xy' => array(3000242.40, 5092492.64),
            'll' => array(40.0, 40.0)
        ),
        array('code' => 'EPSG:54032',
            'xy' => array(-4024426.19, 6432026.98),
            'll' => array(-127.0, 52.11)
        ),
        array('code' => 'EPSG:3153',
            'xy' => array(931625.91, 789252.65),
            'll' => array(-127.0, 52.11)
        ),
        array('code' => 'EPSG:32615',
            'xy' => array(500000, 4649776.22482),
            'll' => array(-93, 42)
        ),
        array('code' => 'EPSG:26916',
            'xy' => array(5110899.06,10552971.81,-22.99),
            'll' => array(-86.6056, 34.5790,0.0)   
        ),
        array('code' => 'EPSG:32612',
            'xy' => array(383357.429537, 6684599.06392),
            'll' => array(-113.109375, 60.28125)
        ),
        array('code' => 'EPSG:3031',
            'xy' => array(-992481.633786, 628482.06328),
            'll' => array(-57.65625, -79.21875)
        ),
        array('code' => 'EPSG:31285',
            'xy' => array(450055.70, 5262356.33),
            'll' => array(13.33333333333, 47.5)
         ),
        array('code' => 'EPSG:2736',
            'xy' => array(603933.40, 7677505.64),
            'll' => array(34.0, -21.0)
         ),
        array('code' => 'EPSG:42304',
            'xy' => array(-358185.267976, -40271.099023),
            'll' => array(-99.84375, 48.515625)
         ),
        array('code' => 'google',
            'xy' => array(-8531595.34908, 6432756.94421),
            'll' => array(-76.640625, 49.921875)
         ),
        array('code' => 'EPSG:42304',
            'xy' => array(-358185.267976, -40271.099023),
            'll' => array(-99.84375, 48.515625)
         ),
        array('code' => 'EPSG:28992',
            'xy' => array(148312.15, 457804.79, 698.48),
            'll' => array(5.29, 52.11)
         )
    );
*/

    $boston_xy = array(-71.0597732, 42.3584308);
    $boston_lonlat = array(-7910337.7674084, 5214822.7762);
    $test_data = array(
        array(
            'code' => 'EPSG:900913',
            'll' => $boston_xy,
            'xy' => $boston_lonlat
        )
    );
    foreach($test_data as $i => $test) {
        extract($test);
        try {
            $pt = new Sourcemap_Proj_Point($ll[0], $ll[1]);
            $pt = Sourcemap_Proj::transform('EPSG:4326', $code, $pt);
            print "EPSG:4326 (WGS84) -> $code: \n";
            print "\tlonlat:\t{$ll[0]}, {$ll[1]}\n";
            print "\txy:\t{$pt->x}, {$pt->y}\texpected: {$xy[0]}, {$xy[1]}\n";
            $pt = Sourcemap_Proj::transform($code, 'EPSG:4326', $pt);
            print "\tinv:\t{$pt->x}, {$pt->y}\texpected: {$ll[0]}, {$ll[1]}\n";
        } catch(Exception $e) {
            print "Skipping code $code (unavailable).\n";
        }
    }
}
