<?php
class MY_Exceptions extends CI_Exceptions
{

    public function show_403($page = '', $log_error = TRUE)
    {
        header("HTTP/1.1 403 Forbidden");
        echo "CSRF token mismatch.";
        exit;
    }
}
