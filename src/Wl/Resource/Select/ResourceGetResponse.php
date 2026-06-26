<?php

namespace WlSdk\Wl\Resource\Select;

/**
 * Response from GET
 */
class ResourceGetResponse
{
    /**
     * Resources list:
     *
     * @var ResourceGetResponseResource[]|null
     */
    public ?array $a_resource = null;

    /**
     * Resources period data list:
     *
     * @var ResourceGetResponseResourcePeriod|null
     */
    public ?ResourceGetResponseResourcePeriod $a_resource_period = null;

    /**
     * Resources period one template.
     *
     * @var string|null
     */
    public ?string $html_period_one = null;

    public function __construct(array $data)
    {
        $this->a_resource = isset($data['a_resource']) ? array_map(static fn ($item) => new ResourceGetResponseResource((array)$item), (array)$data['a_resource']) : null;
        $this->a_resource_period = isset($data['a_resource_period']) ? new ResourceGetResponseResourcePeriod((array)$data['a_resource_period']) : null;
        $this->html_period_one = isset($data['html_period_one']) ? (string)$data['html_period_one'] : null;
    }
}
