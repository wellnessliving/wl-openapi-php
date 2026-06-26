<?php

namespace WlSdk\Wl\Franchise\Transfer;

/**
 * Response from GET
 */
class TransferUserGetResponse
{
    /**
     * Full user's name.
     *
     * @var string|null
     */
    public ?string $text_name_full = null;

    /**
     * User photo URL.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->text_name_full = isset($data['text_name_full']) ? (string)$data['text_name_full'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
