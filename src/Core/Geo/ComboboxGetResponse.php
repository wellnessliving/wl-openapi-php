<?php
namespace WlSdk\Core\Geo;

/**
 * Response from GET
 */
class ComboboxGetResponse
{
    /**
     * No description.
     *
     * @var ComboboxGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn($item) => new ComboboxGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
