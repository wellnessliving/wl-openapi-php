<?php

namespace WlSdk\Wl\Promotion\Terminate\Reason;

/**
 * Response from GET
 */
class PromotionTerminateReasonGetResponse
{
    /**
     * List of available termination reasons for a promotions.
     *
     * @var PromotionTerminateReasonGetResponseReasonList[]|null
     */
    public ?array $a_reason_list = null;

    public function __construct(array $data)
    {
        $this->a_reason_list = isset($data['a_reason_list']) ? array_map(static fn ($item) => new PromotionTerminateReasonGetResponseReasonList((array)$item), (array)$data['a_reason_list']) : null;
    }
}
