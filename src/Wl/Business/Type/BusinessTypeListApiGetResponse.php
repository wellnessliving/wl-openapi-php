<?php
namespace WlSdk\Wl\Business\Type;

/**
 * Response from GET
 */
class BusinessTypeListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_business_type = null;

    public function __construct(array $data)
    {
        $this->a_business_type = isset($data['a_business_type']) ? (array)$data['a_business_type'] : null;
    }
}
