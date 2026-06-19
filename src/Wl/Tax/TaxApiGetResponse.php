<?php
namespace WlSdk\Wl\Tax;

/**
 * Response from GET
 */
class TaxApiGetResponse
{
    /**
     * The tax title.
     *
     * @var string|null
     */
    public ?string $text_tax = null;

    public function __construct(array $data)
    {
        $this->text_tax = isset($data['text_tax']) ? (string)$data['text_tax'] : null;
    }
}
