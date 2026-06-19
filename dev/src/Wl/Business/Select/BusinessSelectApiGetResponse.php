<?php
namespace WlSdk\Wl\Business\Select;

/**
 * Response from GET
 */
class BusinessSelectApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_select = null;

    public function __construct(array $data)
    {
        $this->a_select = isset($data['a_select']) ? (array)$data['a_select'] : null;
    }
}
