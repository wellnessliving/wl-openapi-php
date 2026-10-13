<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ElementPostResponsePurchaseError
{
    /**
     * A machine-readable error code identifying the restriction type.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /**
     * The field associated with the error. Empty string if not applicable.
     *
     * @var string|null
     */
    public ?string $text_field = null;

    /**
     * A human-readable error message describing the restriction.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->text_code = isset($data['text_code']) ? (string)$data['text_code'] : null;
        $this->text_field = isset($data['text_field']) ? (string)$data['text_field'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
