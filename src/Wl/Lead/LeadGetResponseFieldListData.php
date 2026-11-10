<?php

namespace WlSdk\Wl\Lead;

class LeadGetResponseFieldListData
{
    /**
     * The number of rows of the input of a text field. Always set for text fields:
     * `1` when the text field has no number of rows set.
     *
     * @var int|null
     */
    public ?int $i_size = null;

    public function __construct(array $data)
    {
        $this->i_size = isset($data['i_size']) ? (int)$data['i_size'] : null;
    }
}
