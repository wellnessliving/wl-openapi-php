<?php

namespace WlSdk\Wl\Pay\Address\Widget;

/**
 * Response from GET
 */
class WidgetEditGetResponse
{
    /**
     * List of countries with their regions, keyed by country geo key. Each element:
     *
     * @var WidgetEditGetResponseGeo[]|null
     */
    public ?array $a_geo = null;

    /**
     * Mask for phone entering (ready for output to the page).
     *
     * @var string|null
     */
    public ?string $html_phone_mask = null;

    /**
     * Mask for phone entering.
     *
     * @var string|null
     */
    public ?string $text_phone_mask = null;

    public function __construct(array $data)
    {
        $this->a_geo = isset($data['a_geo']) ? array_map(static fn ($item) => new WidgetEditGetResponseGeo((array)$item), (array)$data['a_geo']) : null;
        $this->html_phone_mask = isset($data['html_phone_mask']) ? (string)$data['html_phone_mask'] : null;
        $this->text_phone_mask = isset($data['text_phone_mask']) ? (string)$data['text_phone_mask'] : null;
    }
}
