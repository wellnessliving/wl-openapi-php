<?php

namespace WlSdk\Wl\Marketing\Automation\Prebuilt;

/**
 * Response from GET
 */
class PrebuiltDuplicateGetResponse
{
    /**
     * List of business types.
     * For `get()` method - list of business types connected to the duplicated prebuilt automation.
     * For `post()` method - list of business types to connect to the new prebuilt automation.
     *
     * @var array|null
     */
    public ?array $a_business_type = null;

    /**
     * Whether the prebuilt automation is connected to all business types.
     * If `true`, the prebuilt automation is connected to all business types and can not be duplicated.
     * If `false`, the automation is connected only to business types in `a_business_type`.
     *
     * @var bool|null
     */
    public ?bool $is_business_type_all = null;

    public function __construct(array $data)
    {
        $this->a_business_type = isset($data['a_business_type']) ? (array)$data['a_business_type'] : null;
        $this->is_business_type_all = isset($data['is_business_type_all']) ? (bool)$data['is_business_type_all'] : null;
    }
}
