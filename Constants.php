<?php

class Http
{
    public const NOT_FOUND = 404;
    public const BAD_REQUEST = 400;
    public const UNAUTHORIZED = 401;
    public const FORBIDDEN = 403;
    public const INTERNAL_SERVER_ERROR = 500;
}

print Http::NOT_FOUND . PHP_EOL;