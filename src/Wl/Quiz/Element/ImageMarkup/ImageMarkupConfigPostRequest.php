<?php

namespace WlSdk\Wl\Quiz\Element\ImageMarkup;

class ImageMarkupConfigPostRequest
{
    /**
     * Key of business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key to bind configuration to a specific user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Last used marker configuration (style parameters) for the stored marker tool.
     * `null` if not initialized yet. `array` for compatibility with JavaScript.
     *
     * @var array|mixed|null
     */
    public $o_marker_config = null;

    /**
     * Last selected marker tool type.
     *
     * @var string|null
     */
    public ?string $text_marker_type = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'o_marker_config' => $this->o_marker_config,
            'text_marker_type' => $this->text_marker_type,
            ],
            static fn ($v) => $v !== null
        );
    }
}
