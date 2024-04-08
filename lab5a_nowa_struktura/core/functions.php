<?php
function getFromRequest($name){
    return isset($_REQUEST [$name]) ? $_REQUEST [$name] : null;
}