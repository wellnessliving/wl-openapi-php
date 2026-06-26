<?php

namespace WlSdk\Wl\Promotion\Pay;

class PromotionPayPauseListPutRequest
{
    /**
     * End date of pause period in login promotion timezone. Can be set to special value
     * `0000-00-00` to make the period indefinite until further action.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date of pause period in login promotion timezone.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Bulk of login promotions. Login promotion primary keys serialized with JSON.
     * This logic was selected, because there is possibility to transfer list with more than 1000 elements.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_login_promotion = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            's_login_promotion' => $this->s_login_promotion,
            ],
            static fn ($v) => $v !== null
        );
    }
}
