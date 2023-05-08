<?php
use Firebase\JWT\JWT;

function get_jwt_secret(): string
{
    $JWT_KEY = getenv('TOKEN_SECRET');
    if (!$JWT_KEY) {
        $secret_key_file = __DIR__ . '/secret';
        if (file_exists($secret_key_file)) {
            $JWT_KEY = file_get_contents($secret_key_file);
        } else {
            $JWT_KEY = uniqid(md5(time()), true);
            file_put_contents($secret_key_file, $JWT_KEY);
        }
    }
    ;
    return $JWT_KEY;
}
function create_token(array $options = []): string
{
    $JWT_KEY = get_jwt_secret();
    $payload = [];

    return JWT::encode($payload, $JWT_KEY, 'HS256');

}
?>