<?php

//namespace controllers;
use \DomainException;
use \InvalidArgumentException;
use \UnexpectedValueException;
use \DateTime;

/**
 * JSON Web Token implementation, based on this spec:
 * https://tools.ietf.org/html/rfc7519
 *
 * PHP version 5
 *
 * @category Authentication
 * @package  Authentication_JWT
 * @author   Neuman Vong <neuman@twilio.com>
 * @author   Anant Narayanan <anant@php.net>
 * @license  http://opensource.org/licenses/BSD-3-Clause 3-clause BSD
 * @link     https://github.com/firebase/php-jwt
 */
class JWT
{


    public static $privateKey = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
Proc-Type: 4,ENCRYPTED
DEK-Info: AES-256-CBC,C5F0705FE0D7C51E7634D7DF40AF1EE1

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
-----END RSA PRIVATE KEY-----
EOD;

    public static $publicKey = <<<EOD
-----BEGIN PUBLIC KEY-----
MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAuV/GJuJXC2qCddX1Uu9Y
BCq8FcCzvScc34YB9TD/WdrTKCvdJZDBCuWR4EX6hlvhvWF9Xg8CPwY6DuwIbtEh
IPo18RlELkOY0ODzNZ6LUlxQTyy9AfpStptovfkAuN/wYI5qRceNsUdEjUd0+USQ
fpOg1y4DCkQCAhJ0NZxaPbtn65x3hJTnH0HdqFD6ZaiTM1xk2+kuc+4kxjQL6l60
LioLFThySn8z6fpEbdCXNvYsoRbGOk04Rt59YJV/l5/Xjmid8ytMRennGrYO6m+L
2LHt0oaLjB1e3Fbu8uAIvlE5GUKwF/sODTaW6oh9KquKBftA6KExdLh5BVIjsBEQ
yx0w38ujWbS/c+g3Ax3cSp8aOgp6wK85vMz37Sh33wpm10hve7g307YLggksbkIG
3+hNm802BU1UVIWL2KAse1dBopOcH2+q3YCS3jht0kuUn6EufQpZvepskA+KODs9
Lt//gdKPeo15Y+y3SYoFb//nLvAVGBKxn2mmlzYvZ00td7hmpYwmBWj3tOOHKP2t
41WtLV4Iv9J10kEJTifsXe4Zp/X/4J5gGcLSLWhAh25ZncgNqgyoXtzAGnCgwDdt
k0lVy/ajI935IfoQ5ZIXzjhDX01AvLFHdVNpY92JG8zLwJM2U+Evyb7AllqMve4g
29Oz0FVIazmenFidOR8hdI8CAwEAAQ==
-----END PUBLIC KEY-----
EOD;

    /**
     * When checking nbf, iat or expiration times,
     * we want to provide some extra leeway time to
     * account for clock skew.
     */
    public static $leeway = 0;

    /**
     * Allow the current timestamp to be specified.
     * Useful for fixing a value within unit testing.
     *
     * Will default to PHP time() value if null.
     */
    public static $timestamp = null;

    public static $supported_algs = array(
        'HS256' => array('hash_hmac', 'SHA256'),
        'HS512' => array('hash_hmac', 'SHA512'),
        'HS384' => array('hash_hmac', 'SHA384'),
        'RS256' => array('openssl', 'SHA256'),
        'RS384' => array('openssl', 'SHA384'),
        'RS512' => array('openssl', 'SHA512'),
    );

    /**
     * Decodes a JWT string into a PHP object.
     *
     * @param string $jwt The JWT
     * @param string|array $key The key, or map of keys.
     *                                      If the algorithm used is asymmetric, this is the public key
     * @param array $allowed_algs List of supported verification algorithms
     *                                      Supported algorithms are 'HS256', 'HS384', 'HS512' and 'RS256'
     *
     * @return object The JWT's payload as a PHP object
     *
     * @throws UnexpectedValueException     Provided JWT was invalid
     * @throws SignatureInvalidException    Provided JWT was invalid because the signature verification failed
     * @throws BeforeValidException         Provided JWT is trying to be used before it's eligible as defined by 'nbf'
     * @throws BeforeValidException         Provided JWT is trying to be used before it's been created as defined by 'iat'
     * @throws ExpiredException             Provided JWT has since expired, as defined by the 'exp' claim
     *
     * @uses jsonDecode
     * @uses urlsafeB64Decode
     */
    public static function decode($jwt, $key, array $allowed_algs = array())
    {
        $timestamp = is_null(static::$timestamp) ? time() : static::$timestamp;

        if (empty($key)) {
            throw new InvalidArgumentException('Key may not be empty');
        }
        $tks = explode('.', $jwt);
        if (count($tks) != 3) {
            throw new UnexpectedValueException('Wrong number of segments');
        }
        list($headb64, $bodyb64, $cryptob64) = $tks;
        if (null === ($header = static::jsonDecode(static::urlsafeB64Decode($headb64)))) {
            throw new UnexpectedValueException('Invalid header encoding');
        }
        if (null === $payload = static::jsonDecode(static::urlsafeB64Decode($bodyb64))) {
            throw new UnexpectedValueException('Invalid claims encoding');
        }
        if (false === ($sig = static::urlsafeB64Decode($cryptob64))) {
            throw new UnexpectedValueException('Invalid signature encoding');
        }
        if (empty($header->alg)) {
            throw new UnexpectedValueException('Empty algorithm');
        }
        if (empty(static::$supported_algs[$header->alg])) {
            throw new UnexpectedValueException('Algorithm not supported');
        }
        if (!in_array($header->alg, $allowed_algs)) {
            throw new UnexpectedValueException('Algorithm not allowed');
        }
        if (is_array($key) || $key instanceof \ArrayAccess) {
            if (isset($header->kid)) {
                if (!isset($key[$header->kid])) {
                    throw new UnexpectedValueException('"kid" invalid, unable to lookup correct key');
                }
                $key = $key[$header->kid];
            } else {
                throw new UnexpectedValueException('"kid" empty, unable to lookup correct key');
            }
        }

        // Check the signature
        if (!static::verify("$headb64.$bodyb64", $sig, $key, $header->alg)) {
            throw new SignatureInvalidException('Signature verification failed');
        }

        // Check if the nbf if it is defined. This is the time that the
        // token can actually be used. If it's not yet that time, abort.
        if (isset($payload->nbf) && $payload->nbf > ($timestamp + static::$leeway)) {
            throw new BeforeValidException(
                'Cannot handle token prior to ' . date(DateTime::ISO8601, $payload->nbf)
            );
        }

        // Check that this token has been created before 'now'. This prevents
        // using tokens that have been created for later use (and haven't
        // correctly used the nbf claim).
        if (isset($payload->iat) && $payload->iat > ($timestamp + static::$leeway)) {
            throw new BeforeValidException(
                'Cannot handle token prior to ' . date(DateTime::ISO8601, $payload->iat)
            );
        }

        // Check if this token has expired.
        if (isset($payload->exp) && ($timestamp - static::$leeway) >= $payload->exp) {
            throw new ExpiredException('Expired token');
        }

        return $payload;
    }

    /**
     * Converts and signs a PHP object or array into a JWT string.
     *
     * @param object|array $payload PHP object or array
     * @param string $key The secret key.
     *                                  If the algorithm used is asymmetric, this is the private key
     * @param string $alg The signing algorithm.
     *                                  Supported algorithms are 'HS256', 'HS384', 'HS512' and 'RS256'
     * @param mixed $keyId
     * @param array $head An array with header elements to attach
     *
     * @return string A signed JWT
     *
     * @uses jsonEncode
     * @uses urlsafeB64Encode
     */
    public static function encode($payload, $key, $alg = 'HS256', $keyId = null, $head = null)
    {
        $header = array('typ' => 'JWT', 'alg' => $alg);
        if ($keyId !== null) {
            $header['kid'] = $keyId;
        }
        if (isset($head) && is_array($head)) {
            $header = array_merge($head, $header);
        }
        $segments = array();
        $segments[] = static::urlsafeB64Encode(static::jsonEncode($header));
        $segments[] = static::urlsafeB64Encode(static::jsonEncode($payload));
        $signing_input = implode('.', $segments);

        $signature = static::sign($signing_input, $key, $alg);
        $segments[] = static::urlsafeB64Encode($signature);

        return implode('.', $segments);
    }

    /**
     * Sign a string with a given key and algorithm.
     *
     * @param string $msg The message to sign
     * @param string|resource $key The secret key
     * @param string $alg The signing algorithm.
     *                                  Supported algorithms are 'HS256', 'HS384', 'HS512' and 'RS256'
     *
     * @return string An encrypted message
     *
     * @throws DomainException Unsupported algorithm was specified
     */
    public static function sign($msg, $key, $alg = 'HS256')
    {
        if (empty(static::$supported_algs[$alg])) {
            throw new DomainException('Algorithm not supported');
        }
        list($function, $algorithm) = static::$supported_algs[$alg];
        switch ($function) {
            case 'hash_hmac':
                return hash_hmac($algorithm, $msg, $key, true);
            case 'openssl':
                $signature = '';
                $success = openssl_sign($msg, $signature, $key, $algorithm);
                if (!$success) {
                    throw new DomainException("OpenSSL unable to sign data");
                } else {
                    return $signature;
                }
        }
    }

    /**
     * Verify a signature with the message, key and method. Not all methods
     * are symmetric, so we must have a separate verify and sign method.
     *
     * @param string $msg The original message (header and body)
     * @param string $signature The original signature
     * @param string|resource $key For HS*, a string key works. for RS*, must be a resource of an openssl public key
     * @param string $alg The algorithm
     *
     * @return bool
     *
     * @throws DomainException Invalid Algorithm or OpenSSL failure
     */
    private static function verify($msg, $signature, $key, $alg)
    {
        if (empty(static::$supported_algs[$alg])) {
            throw new DomainException('Algorithm not supported');
        }

        list($function, $algorithm) = static::$supported_algs[$alg];
        switch ($function) {
            case 'openssl':
                $success = openssl_verify($msg, $signature, $key, $algorithm);
                if ($success === 1) {
                    return true;
                } elseif ($success === 0) {
                    return false;
                }
                // returns 1 on success, 0 on failure, -1 on error.
                throw new DomainException(
                    'OpenSSL error: ' . openssl_error_string()
                );
            case 'hash_hmac':
            default:
                $hash = hash_hmac($algorithm, $msg, $key, true);
                if (function_exists('hash_equals')) {
                    return hash_equals($signature, $hash);
                }
                $len = min(static::safeStrlen($signature), static::safeStrlen($hash));

                $status = 0;
                for ($i = 0; $i < $len; $i++) {
                    $status |= (ord($signature[$i]) ^ ord($hash[$i]));
                }
                $status |= (static::safeStrlen($signature) ^ static::safeStrlen($hash));

                return ($status === 0);
        }
    }

    /**
     * Decode a JSON string into a PHP object.
     *
     * @param string $input JSON string
     *
     * @return object Object representation of JSON string
     *
     * @throws DomainException Provided string was invalid JSON
     */
    public static function jsonDecode($input)
    {
        if (version_compare(PHP_VERSION, '5.4.0', '>=') && !(defined('JSON_C_VERSION') && PHP_INT_SIZE > 4)) {
            /** In PHP >=5.4.0, json_decode() accepts an options parameter, that allows you
             * to specify that large ints (like Steam Transaction IDs) should be treated as
             * strings, rather than the PHP default behaviour of converting them to floats.
             */
            $obj = json_decode($input, false, 512, JSON_BIGINT_AS_STRING);
        } else {
            /** Not all servers will support that, however, so for older versions we must
             * manually detect large ints in the JSON string and quote them (thus converting
             *them to strings) before decoding, hence the preg_replace() call.
             */
            $max_int_length = strlen((string)PHP_INT_MAX) - 1;
            $json_without_bigints = preg_replace('/:\s*(-?\d{' . $max_int_length . ',})/', ': "$1"', $input);
            $obj = json_decode($json_without_bigints);
        }

        if (function_exists('json_last_error') && $errno = json_last_error()) {
            static::handleJsonError($errno);
        } elseif ($obj === null && $input !== 'null') {
            throw new DomainException('Null result with non-null input');
        }
        return $obj;
    }

    /**
     * Encode a PHP object into a JSON string.
     *
     * @param object|array $input A PHP object or array
     *
     * @return string JSON representation of the PHP object or array
     *
     * @throws DomainException Provided object could not be encoded to valid JSON
     */
    public static function jsonEncode($input)
    {
        $json = json_encode($input);
        if (function_exists('json_last_error') && $errno = json_last_error()) {
            static::handleJsonError($errno);
        } elseif ($json === 'null' && $input !== null) {
            throw new DomainException('Null result with non-null input');
        }
        return $json;
    }

    /**
     * Decode a string with URL-safe Base64.
     *
     * @param string $input A Base64 encoded string
     *
     * @return string A decoded string
     */
    public static function urlsafeB64Decode($input)
    {
        $remainder = strlen($input) % 4;
        if ($remainder) {
            $padlen = 4 - $remainder;
            $input .= str_repeat('=', $padlen);
        }
        return base64_decode(strtr($input, '-_', '+/'));
    }

    /**
     * Encode a string with URL-safe Base64.
     *
     * @param string $input The string you want encoded
     *
     * @return string The base64 encode of what you passed in
     */
    public static function urlsafeB64Encode($input)
    {
        return str_replace('=', '', strtr(base64_encode($input), '+/', '-_'));
    }

    /**
     * Helper method to create a JSON error.
     *
     * @param int $errno An error number from json_last_error()
     *
     * @return void
     */
    private static function handleJsonError($errno)
    {
        $messages = array(
            JSON_ERROR_DEPTH => 'Maximum stack depth exceeded',
            JSON_ERROR_STATE_MISMATCH => 'Invalid or malformed JSON',
            JSON_ERROR_CTRL_CHAR => 'Unexpected control character found',
            JSON_ERROR_SYNTAX => 'Syntax error, malformed JSON',
            JSON_ERROR_UTF8 => 'Malformed UTF-8 characters' //PHP >= 5.3.3
        );
        throw new DomainException(
            isset($messages[$errno])
                ? $messages[$errno]
                : 'Unknown JSON error: ' . $errno
        );
    }

    /**
     * Get the number of bytes in cryptographic strings.
     *
     * @param string
     *
     * @return int
     */
    private static function safeStrlen($str)
    {
        if (function_exists('mb_strlen')) {
            return mb_strlen($str, '8bit');
        }
        return strlen($str);
    }
}
