<?php

namespace WlSdk\Wl\Postcard;

/**
 * Response from POST
 */
class PostcardAddressPostResponse
{
    /**
     * Whether address is verified and valid.
     *
     * `true` if address verified and valid.
     * `false` if address is not verified yet or not valid.
     *
     * @var bool|null
     */
    public ?bool $is_valid = null;

    /**
     * Whether address already verified.
     *
     * @var bool|null
     */
    public ?bool $is_verified = null;

    /**
     * Additional notes for address verification.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function __construct(array $data)
    {
        $this->is_valid = isset($data['is_valid']) ? (bool)$data['is_valid'] : null;
        $this->is_verified = isset($data['is_verified']) ? (bool)$data['is_verified'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
    }
}
