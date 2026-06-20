<?php
namespace WlSdk\Wl\Business\Type;

/**
 * Response from GET
 */
class BusinessTypeListGetResponse
{
    /**
     * A list of business types. Each element has the next structure:
     *
     * @var BusinessTypeListGetResponseBusinessType[]|null
     */
    public ?array $a_business_type = null;

    public function __construct(array $data)
    {
        $this->a_business_type = isset($data['a_business_type']) ? array_map(static fn($item) => new BusinessTypeListGetResponseBusinessType((array)$item), (array)$data['a_business_type']) : null;
    }
}
