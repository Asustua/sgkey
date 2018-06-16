<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function install_db() {
    // Users
    $sQuery = '
        id medint(11),
        name (150) vchar,
        password (255) vchar,
        group_id (11) medint,
        level   (1) tinyint
        created_at datetime,
        created_by (11) mint
    ';
    
    // Folders
    $sQuery = '
        id (11) mid,
        name (255) vchar,
        parent (11) mid,
        icon_id (11) mid,
    ';
    
    // Icons
    $sQuery = '
        id (11) mid,
        img (100) vchar,
        name (100) vchar
    ';
    
    // Keys
    $sQuery = '
        id (11) mid,
        folder_id (11) mid,
        password (255) vchar,
        salt (255) vchar,
        created_at,
        created_by
    ';
    
    // Permissions
    $sQuery = '
        user_id (11) mid,
        type (folder|key)
        type_id (11) mid,
    ';
}