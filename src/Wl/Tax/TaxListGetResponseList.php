<?php

namespace WlSdk\Wl\Tax;

class TaxListGetResponseList
{
    /**
     * The locations where the tax is applicable.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * The amount of the tax.
     *
     * @var float|null
     */
    public ?float $f_value = null;

    /**
     * The tax key.
     *
     * @var string|null
     */
    public ?string $k_tax = null;

    /**
     * The name of the tax.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->f_value = isset($data['f_value']) ? (float)$data['f_value'] : null;
        $this->k_tax = isset($data['k_tax']) ? (string)$data['k_tax'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
