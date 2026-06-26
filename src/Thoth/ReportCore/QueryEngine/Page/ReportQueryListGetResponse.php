<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

/**
 * Response from GET
 */
class ReportQueryListGetResponse
{
    /**
     * List of registry records. Each element:
     *
     * @var ReportQueryListGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new ReportQueryListGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
