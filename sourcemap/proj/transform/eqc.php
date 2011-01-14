<?php
/* similar to equi.js FIXME proj4 uses eqc */
class Sourcemap_Proj_Transform_Eqc {
    public function init() {
        if(!$this->x0) $this->x0=0;
        if(!$this->y0) $this->y0=0;
        if(!$this->lat0) $this->lat0=0;
        if(!$this->long0) $this->long0=0;
        if(!$this->lat_ts) $this->lat_ts=0;
        if(!$this->title) $this->title = "Equidistant Cylindrical (Plate Carre)";

        $this->rc = cos($this->lat_ts);
    }


    // forward equations--mapping lat,long to x,y
    // -----------------------------------------------------------------
    public function forward($p) {

        $lon= $p->x;
        $lat= $p->y;

        $dlon = Sourcemap_Proj::adjust_lon($lon - $this->long0);
        $dlat = Sourcemap_Proj::adjust_lat($lat - $this->lat0 );
        $p->x = $this->x0 + ($this->a* $dlon *$this->rc);
        $p->y = $this->y0 + ($this->a* $dlat);
        return $p;
    }

    // inverse equations--mapping x,y to lat/long
    // -----------------------------------------------------------------
    public function inverse($p) {

        $x= $p->x;
        $y= $p->y;

        $p->x = Sourcemap_Proj::adjust_lon($this->long0 + (($x - $this->x0)/($this->a*$this->rc)));
        $p->y = Sourcemap_Proj::adjust_lat($this->lat0  + (($y - $this->y0)/($this->a)));
        return $p;
  }

}
