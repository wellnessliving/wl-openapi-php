<?php

namespace WlSdk\Wl\Quiz\Element\ImageMarkup;

/**
 * Response from GET
 */
class ImageMarkupConfigGetResponse
{
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

    public function __construct(array $data)
    {
        $this->o_marker_config = $data['o_marker_config'] ?? null;
        $this->text_marker_type = isset($data['text_marker_type']) ? (string)$data['text_marker_type'] : null;
    }
}
