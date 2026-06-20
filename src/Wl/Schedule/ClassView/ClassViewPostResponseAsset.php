<?php

namespace WlSdk\Wl\Schedule\ClassView;

class ClassViewPostResponseAsset
{
    /**
     * Number of sessions.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Asset index.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * Type of the asset: Asset or Off-Site Location.
     *
     * @var string|null
     */
    public ?string $id_category = null;

    /**
     * City of the asset, if this is Off-Site Location.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * Resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Address of the asset, if this is Off-Site Location.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Additional address guidance, if this is Off-Site Location.
     *
     * @var string|null
     */
    public ?string $text_guide = null;

    /**
     * Asset index with '#' prefix.
     *
     * @var string|null
     */
    public ?string $text_index = null;

    /**
     * Postal code of the asset, if this is Off-Site Location.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * Asset title that consists of the asset title itself concatenated with its index (in case of multiple assets)
     * by '#'.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    public function __construct(array $data)
    {
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->i_index = isset($data['i_index']) ? (int)$data['i_index'] : null;
        $this->id_category = isset($data['id_category']) ? (string)$data['id_category'] : null;
        $this->k_city = isset($data['k_city']) ? (string)$data['k_city'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_guide = isset($data['text_guide']) ? (string)$data['text_guide'] : null;
        $this->text_index = isset($data['text_index']) ? (string)$data['text_index'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
    }
}
