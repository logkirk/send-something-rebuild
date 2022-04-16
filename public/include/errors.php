<?php
set_exception_handler('handle_exception');
function handle_exception($e) {
    error_log($e);
    http_response_code(500);
    require_once 'header.php';
    echo '<h1>Sorry, a problem occurred.</h1><p>Please try again later.</p>';
    require_once 'footer.php';
    exit;
}

set_error_handler('handle_error');
function handle_error($type, $message, $file = '', $line = 0) {
    throw new ErrorException($message, 0, $type, $file, $line);
}

register_shutdown_function('handle_shutdown');
function handle_shutdown() {
    $error = error_get_last();
    if ($error) {
        $e = new ErrorException($error['message'], 0, $error['type'], $error['file'], $error['line']);
        handle_exception($e);
    }
}
