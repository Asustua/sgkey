<?php

/***
 * 
 */
function getHardwarePrint() {
    $output = shell_exec ('hwinfo --short');
    // cpu + gpu+sound+network+disks+cdrom
    
    $output = shell_exec ('sudo hdparm -I /dev/sda' );
    
}