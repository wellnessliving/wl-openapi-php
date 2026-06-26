<?php

namespace WlSdk\Wl\Promotion\Terminate\Reason;

class PromotionTerminateReasonGetResponseReasonList
{
    /**
     * Reason key. Primary key in PromotionTerminateReasonSql table.
     *
     * @var string|null
     */
    public ?string $k_reason = null;

    /**
     * Reason title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_reason = isset($data['k_reason']) ? (string)$data['k_reason'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
