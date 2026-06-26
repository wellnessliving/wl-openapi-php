<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from GET
 */
class BusinessListGetResponse
{
    /**
     * See BusinessListData::toClassPass() for documentation.
     *
     * @var array|null
     */
    public ?array $a_pagination = null;

    /**
     * See BusinessListData::toClassPass() for documentation.
     *
     * Be attentive this argument used as intermediate when request is forwarded and as final for direct request.
     * Logic of filling this array described in `namespace.Wl/ClassPass/doc/BusinessListApi-get.en.md`.
     *
     * @var array|null
     */
    public ?array $a_partner_list = null;

    public function __construct(array $data)
    {
        $this->a_pagination = isset($data['a_pagination']) ? (array)$data['a_pagination'] : null;
        $this->a_partner_list = isset($data['a_partner_list']) ? (array)$data['a_partner_list'] : null;
    }
}
