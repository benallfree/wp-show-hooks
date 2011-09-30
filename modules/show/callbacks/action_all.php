<?

global $seen_hooks;

$key = $context->input[0];
$seen_hooks[$key] = true;