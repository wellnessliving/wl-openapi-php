<?php

namespace WlSdk\Core\Geo;

/**
 * Response from GET
 */
class ComboboxGetResponse
{
    /**
     * A list of items to show in the combobox list.
     *
     * Each element of the array is a city matching the string with the following structure:
     *
     * @var ComboboxGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new ComboboxGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
