<?php
namespace WlSdk;

/**
 * Thrown when the WellnessLiving API returns a non-2xx HTTP response.
 */
class WlSdkException extends \RuntimeException
{
    /**
     * @var array|null Parsed JSON response body, or `null` if the body was not valid JSON.
     */
    public $data;

    /**
     * @param string $message Human-readable error description.
     * @param int $status HTTP status code (also available via {@see \RuntimeException::getCode()}).
     * @param array|null $data Parsed JSON response body.
     */
    public function __construct(string $message, int $status, $data = null)
    {
        parent::__construct($message, $status);
        $this->data = $data;
    }
}
