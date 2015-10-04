<?php
/**
 * Rodesk detect functions
 * =====================
 *
 * A serie of mobile detect functions. Based on the Mobile Detect plugin
 *
 * @author      Rodesk BV
 * @version     1.0
 */

// Load the Mobile_Detect.php script
if(!class_exists('device_class')) require_once('plugins/Mobile_Detect.php');

$useragent = isset( $_SERVER['HTTP_USER_AGENT'] ) ? $_SERVER['HTTP_USER_AGENT'] : "";
$mobble_detect = new Mobile_Detect();
$mobble_detect->setDetectionType( 'extended' );

/***************************************************************
* Function rodesk_is_iphone
* Detect the iPhone
***************************************************************/

function rodesk_is_iphone() {
    global $mobble_detect;
    return $mobble_detect->isIphone();
}

/***************************************************************
* Function rodesk_is_ipad
* Detect the iPad
***************************************************************/

function rodesk_is_ipad() {
    global $mobble_detect;
    return $mobble_detect->isIpad();
}

/***************************************************************
* Function rodesk_is_ipod
* Detect the iPod, most likely the iPod touch
***************************************************************/

function rodesk_is_ipod() {
    global $mobble_detect;
    return $mobble_detect->is( 'iPod' );
}

/***************************************************************
* Function rodesk_is_android
* Detect an android device.
***************************************************************/

function rodesk_is_android() {
    global $mobble_detect;
    return $mobble_detect->isAndroidOS();
}

/***************************************************************
* Function rodesk_is_blackberry
* Detect a blackberry device
***************************************************************/

function rodesk_is_blackberry() {
    global $mobble_detect;
    return $mobble_detect->isBlackBerry();
}

/***************************************************************
* Function rodesk_is_opera_mobile
* Detect both Opera Mini and hopefully Opera Mobile as well
***************************************************************/

function rodesk_is_opera_mobile() {
    global $mobble_detect;
    return $mobble_detect->isOpera();
}

/***************************************************************
* Function rodesk_is_palm - to be phased out as not using new detect library?
* Detect a webOS device such as Pre and Pixi
***************************************************************/

function rodesk_is_palm() {
    _deprecated_function( 'is_palm', '1.2', 'is_webos' );
    global $mobble_detect;
    return $mobble_detect->is( 'webOS' );
}

/***************************************************************
* Function rodesk_is_webos
* Detect a webOS device such as Pre and Pixi
***************************************************************/

function rodesk_is_webos() {
    global $mobble_detect;
    return $mobble_detect->is( 'webOS' );
}

/***************************************************************
* Function rodesk_is_symbian
* Detect a symbian device, most likely a nokia smartphone
***************************************************************/

function rodesk_is_symbian() {
    global $mobble_detect;
    return $mobble_detect->is( 'Symbian' );
}

/***************************************************************
* Function rodesk_is_windows_mobile
* Detect a windows smartphone
***************************************************************/

function rodesk_is_windows_mobile() {
    global $mobble_detect;
    return $mobble_detect->is( 'WindowsMobileOS' ) || $mobble_detect->is( 'WindowsPhoneOS' );
}

/***************************************************************
* Function rodesk_is_lg
* Detect an LG phone
***************************************************************/

function rodesk_is_lg() {
    _deprecated_function( 'is_lg', '1.2' );
    global $useragent;
    return preg_match( '/LG/i', $useragent );
}

/***************************************************************
* Function rodesk_is_motorola
* Detect a Motorola phone
***************************************************************/

function rodesk_is_motorola() {
    global $mobble_detect;
    return $mobble_detect->is( 'Motorola' );
}

/***************************************************************
* Function rodesk_is_nokia
* Detect a Nokia phone
***************************************************************/

function rodesk_is_nokia() {
    _deprecated_function( 'is_nokia', '1.2' );
    global $useragent;
    return preg_match( '/Series60/i', $useragent ) || preg_match( '/Symbian/i', $useragent ) || preg_match( '/Nokia/i', $useragent );
}

/***************************************************************
* Function rodesk_is_samsung
* Detect a Samsung phone
***************************************************************/

function rodesk_is_samsung() {
    global $mobble_detect;
    return $mobble_detect->is( 'Samsung' );
}

/***************************************************************
* Function rodesk_is_samsung_galaxy_tab
* Detect the Galaxy tab
***************************************************************/

function rodesk_is_samsung_galaxy_tab() {
    _deprecated_function( 'is_samsung_galaxy_tab', '1.2', 'is_samsung_tablet' );
    return is_samsung_tablet();
}

/***************************************************************
* Function rodesk_is_samsung_tablet
* Detect the Galaxy tab
***************************************************************/

function rodesk_is_samsung_tablet() {
    global $mobble_detect;
    return $mobble_detect->is( 'SamsungTablet' );
}

/***************************************************************
* Function rodesk_is_kindle
* Detect an Amazon kindle
***************************************************************/

function rodesk_is_kindle() {
    global $mobble_detect;
    return $mobble_detect->is( 'Kindle' );
}

/***************************************************************
* Function rodesk_is_sony_ericsson
* Detect a Sony Ericsson
***************************************************************/

function rodesk_is_sony_ericsson() {
    global $mobble_detect;
    return $mobble_detect->is( 'Sony' );
}

/***************************************************************
* Function rodesk_is_nintendo
* Detect a Nintendo DS or DSi
***************************************************************/

function rodesk_is_nintendo() {
    global $useragent;
    return preg_match( '/Nintendo DSi/i', $useragent ) || preg_match( '/Nintendo DS/i', $useragent );
}


/***************************************************************
* Function rodesk_is_smartphone
* Grade of phone A = Smartphone - currently testing this
***************************************************************/

function rodesk_is_smartphone() {
    global $mobble_detect;
    $grade = $mobble_detect->mobileGrade();
    if ( $grade == 'A' || $grade == 'B' ) {
        return true;
    } else {
        return false;
    }
}

/***************************************************************
* Function rodesk_is_handheld
* Wrapper function for detecting ANY handheld device
***************************************************************/

function rodesk_is_handheld() {
    return is_mobile() || is_iphone() || is_ipad() || is_ipod() || is_android() || is_blackberry() || is_opera_mobile() || is_webos() || is_symbian() || is_windows_mobile() || is_motorola() || is_samsung() || is_samsung_tablet() || is_sony_ericsson() || is_nintendo();
}

/***************************************************************
* Function rodesk_is_mobile
* For detecting ANY mobile phone device
***************************************************************/

function rodesk_is_mobile() {
    global $mobble_detect;
    if ( rodesk_is_tablet() ) return false;
    return $mobble_detect->isMobile();
}

/***************************************************************
* Function rodesk_is_ios
* For detecting ANY iOS/Apple device
***************************************************************/

function rodesk_is_ios() {
    global $mobble_detect;
    return $mobble_detect->isiOS();
}

/***************************************************************
* Function rodesk_is_tablet
* For detecting tablet devices (needs work)
***************************************************************/

function rodesk_is_tablet() {
    global $mobble_detect;
    return $mobble_detect->isTablet();
}

/***************************************************************
* Function rodesk_is_ie
* For detecting IE version
***************************************************************/

function rodesk_is_ie( $version_test = '' ) {

    // Check if the test version is set
    if( isset ( $version_test ) ) {

        preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);

        // Is this IE
        if (count($matches)>1){

            $version_actual = $matches[1]; // Set IE version

            // Check if actual version is equal to test version
            if( $version_actual == $version_test ) {

                // echo "MSIE" . $version_actual;
                return true;

            }

        }
    }
}
