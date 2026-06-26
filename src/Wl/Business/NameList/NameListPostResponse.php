<?php

namespace WlSdk\Wl\Business\NameList;

/**
 * Response from POST
 */
class NameListPostResponse
{
    /**
     * List of business keys that are incorrect.
     *
     * @var array|null
     */
    public ?array $a_business_error = null;

    /**
     * Each field is a business key, the primary key in the RsBusinessSql table. Each value is the business name.
     *
     * @var array|null
     */
    public ?array $a_business_name = null;

    public function __construct(array $data)
    {
        $this->a_business_error = isset($data['a_business_error']) ? (array)$data['a_business_error'] : null;
        $this->a_business_name = isset($data['a_business_name']) ? (array)$data['a_business_name'] : null;
    }
}
