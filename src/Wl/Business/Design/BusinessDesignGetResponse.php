<?php
namespace WlSdk\Wl\Business\Design;

/**
 * Response from GET
 */
class BusinessDesignGetResponse
{
    /**
     * No description.
     *
     * @var BusinessDesignGetResponseData[]|null
     */
    public ?array $a_data = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? array_map(static fn($item) => new BusinessDesignGetResponseData((array)$item), (array)$data['a_data']) : null;
    }
}
