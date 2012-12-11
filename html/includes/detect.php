<?php
    /* a utiliser si besoin
     * fair un echo de la fonction dans la balise <html class="js-false <?php echo device(); ?>">
     * ou faire directement les test en php dans les pages désirées
     */
    require_once 'Mobile_Detect.php';

    function device(){
        $detect = new Mobile_Detect();
        $device = 'computer';
        if( $detect->isMobile() || $detect->isTablet() ){
            $device = 'computer-false';
        }
        return $device;
    }

?>