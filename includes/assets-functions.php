<?php

/**
 * Load custom modernirz function if it exists
 *
 * @return string Path to custom or default Modernirz version
 *
 */

function rodesk_load_modernizr() {
    // Load custom modernizr is it exists else load default
    $modernizr = file_exists( rodesk_asset_path( 'scripts/modernizr-custom.js' ) ) ? 'modernizr-custom.js' : 'modernizr.js' ;
    $modernizr = 'assets/scripts/' . $modernizr;

    return $modernizr;
}

/**
 * Get environment dependent asset path
 *
 * @param  string The name of the asset file
 * @return Path to the default or revisited asset file
 *
 */

function rodesk_asset_path( $filename ) {
    $dist_path  = 'assets/';
    $directory  = dirname($filename) . '/';
    $file       = basename($filename);

    static $manifest;

    if( empty($manifest) ) {
        $manifest_path  = $dist_path . 'assets-revisions.json';
        $manifest       = new JsonManifest($manifest_path);
    }

    if (array_key_exists($file, $manifest->get())) {
        $temp_manifest = $manifest->get();
        return $dist_path . $directory . $temp_manifest[$file];
    } else {
        return $dist_path . $directory . $file;
    }
}

/**
 * JSON manifest class
 *
 * Based on the asset menifest system of Sage by Roots
 * https://github.com/roots/sage/blob/master/lib/assets.php
 *
 */

class JsonManifest {

    private $manifest;

    public function __construct($manifest_path) {
        if (file_exists($manifest_path)) {
            $this->manifest = json_decode(file_get_contents($manifest_path), true);
        } else {
            $this->manifest = [];
        }
    }

    public function get() {
        return $this->manifest;
    }

    public function getPath($key = '', $default = null) {

        $collection = $this->manifest;

        if (is_null($key))
            return $collection;

        if (isset($collection[$key]))
            return $collection[$key];

        foreach (explode('.', $key) as $segment) {
            if (!isset($collection[$segment])) {
                return $default;
            } else {
                $collection = $collection[$segment];
            }
        }

        return $collection;
    }
}
