<?php

namespace WlSdk\Wl\Contact\Member\History\Report\Filter;

/**
 * Response from GET
 */
class NameFilterOptionGetResponse
{
    /**
     * List of name filter options.
     *
     * Each element has the following structure:
     *
     * @var NameFilterOptionGetResponseOptionList[]|null
     */
    public ?array $a_option_list = null;

    public function __construct(array $data)
    {
        $this->a_option_list = isset($data['a_option_list']) ? array_map(static fn ($item) => new NameFilterOptionGetResponseOptionList((array)$item), (array)$data['a_option_list']) : null;
    }
}
