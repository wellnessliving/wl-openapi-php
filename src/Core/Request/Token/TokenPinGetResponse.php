<?php
namespace WlSdk\Core\Request\Token;

/**
 * Response from GET
 */
class TokenPinGetResponse
{
    /**
     * The expiration date/time of the PIN code.
     *
     * @var string|null
     */
    public ?string $dtu_expire = null;

    /**
     * The PIN code.
     *
     * @var string|null
     */
    public ?string $text_pin = null;

    public function __construct(array $data)
    {
        $this->dtu_expire = isset($data['dtu_expire']) ? (string)$data['dtu_expire'] : null;
        $this->text_pin = isset($data['text_pin']) ? (string)$data['text_pin'] : null;
    }
}
