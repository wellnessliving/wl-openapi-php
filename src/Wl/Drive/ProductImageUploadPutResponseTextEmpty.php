<?php

namespace WlSdk\Wl\Drive;

class ProductImageUploadPutResponseTextEmpty
{
    /**
     * Class to change view of the upload form.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * Text to replacing.
     *
     * @var string|null
     */
    public ?string $s_text = null;

    public function __construct(array $data)
    {
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_text = isset($data['s_text']) ? (string)$data['s_text'] : null;
    }
}
