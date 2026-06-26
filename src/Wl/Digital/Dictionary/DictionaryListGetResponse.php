<?php

namespace WlSdk\Wl\Digital\Dictionary;

/**
 * Response from GET
 */
class DictionaryListGetResponse
{
    /**
     * A list of curves partner.
     *
     * @var array[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
    }
}
