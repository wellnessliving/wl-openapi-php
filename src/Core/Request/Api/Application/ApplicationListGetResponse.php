<?php

namespace WlSdk\Core\Request\Api\Application;

/**
 * Response from GET
 */
class ApplicationListGetResponse
{
    /**
     * A list of applications. Each element contains:
     *
     * @var ApplicationListGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new ApplicationListGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
