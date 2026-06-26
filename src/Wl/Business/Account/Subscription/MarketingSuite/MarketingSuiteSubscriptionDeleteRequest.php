<?php

namespace WlSdk\Wl\Business\Account\Subscription\MarketingSuite;

class MarketingSuiteSubscriptionDeleteRequest
{
    /**
     * Unsubscribe reason ID.
     *
     * One of subscription {@link \WlSdk\Wl\Business\Account\Subscription\UnsubscribeReason\UnsubscribeReasonSid}
     * or subclass constants.
     * `null` in a case of custom reason. In this case `text_unsubscribe_reason`
     * should be specified.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\UnsubscribeReason\UnsubscribeReasonSid
     */
    public ?int $id_unsubscribe_reason = null;

    /**
     * Business key. Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Custom unsubscribe reason for {@link
     * \WlSdk\Wl\Business\Account\Subscription\UnsubscribeReason\UnsubscribeReasonSid}.
     *
     * `null` if not set, in this case `id_unsubscribe_reason` should be specified.
     *
     * @var string|null
     */
    public ?string $text_unsubscribe_reason = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_unsubscribe_reason' => $this->id_unsubscribe_reason,
            'k_business' => $this->k_business,
            'text_unsubscribe_reason' => $this->text_unsubscribe_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
