<?php

function set_active($path, $active = 'current-menu-item') {

return call_user_func_array('Request::is', (array)$path) ? $active : '';

}