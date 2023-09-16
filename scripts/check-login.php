<?php

// session_start(); 

function cookie_session() {
    if (!isset($_COOKIE["username"])) {
        if (!isset($_COOKIE["entreprise"])) {
 
        header("Location: ../index.php");

    }
}
}
function cookie_session_index() {
    if (isset($_COOKIE["username"])) {
        if (isset($_COOKIE["entreprise"])) {
        header("Location: pages/overview.php");

    }
}
}

function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
};

function session() {

    if (!is_session_started()){

    header("Location: ../index.php");
    };
};


function session_index() { 

    if (is_session_started() === TRUE){

        header("Location: pages/overview.php");
        
    };
    
    // if(session_status() === PHP_SESSION_NONE) {
    //     header("Location: index.php");
    // };
    
    };