<?php

namespace WlSdk\Wl\Business\Churn;

class BusinessChurnPostRequest
{
    /**
     * Business churn date.
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $dl_churn = null;

    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Reason of a business churn.
     *
     * @var string|null
     */
    public ?string $text_churn_reason = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_churn' => $this->dl_churn,
            'k_business' => $this->k_business,
            'text_churn_reason' => $this->text_churn_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
