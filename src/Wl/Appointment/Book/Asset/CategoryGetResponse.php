<?php
namespace WlSdk\Wl\Appointment\Book\Asset;

/**
 * Response from GET
 */
class CategoryGetResponse
{
    /**
     * A list of information about asset categories.
     *
     * @var CategoryGetResponseCategory[]|null
     */
    public ?array $a_category = null;

    public function __construct(array $data)
    {
        $this->a_category = isset($data['a_category']) ? array_map(static fn($item) => new CategoryGetResponseCategory((array)$item), (array)$data['a_category']) : null;
    }
}
