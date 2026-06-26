<?php

namespace WlSdk\Wl\Skin;

/**
 * Response from GET
 */
class SkinGetResponse
{
    /**
     * Skin data.
     * Result of the RsSkinData::skin() method.
     *
     * @var array|null
     */
    public ?array $a_skin = null;

    /**
     * Skin type, one of {@link \WlSdk\RsSkinSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsSkinSid
     */
    public ?int $id_skin = null;

    /**
     * URL to the main page of the widget.
     *
     * @var string|null
     */
    public ?string $url_skin = null;

    public function __construct(array $data)
    {
        $this->a_skin = isset($data['a_skin']) ? (array)$data['a_skin'] : null;
        $this->id_skin = isset($data['id_skin']) ? (int)$data['id_skin'] : null;
        $this->url_skin = isset($data['url_skin']) ? (string)$data['url_skin'] : null;
    }
}
