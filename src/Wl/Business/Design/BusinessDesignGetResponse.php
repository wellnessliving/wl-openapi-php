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
     * @var array[]|null
     */
    public ?array $a_data = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? (array)$data['a_data'] : null;
    }
}
