<?php
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value)
{
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}

function authorize($note, $user_id)
{
    if ($note['user_id'] !== $user_id) {
        abort(Response::FORBIDDEN);
    }
}
