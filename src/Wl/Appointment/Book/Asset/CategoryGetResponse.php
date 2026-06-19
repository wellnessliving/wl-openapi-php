<?php
namespace WlSdk\Wl\Appointment\Book\Asset;

/**
 * Response from GET
 */
class CategoryGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_category = null;

    public function __construct(array $data)
    {
        $this->a_category = isset($data['a_category']) ? (array)$data['a_category'] : null;
    }
}
