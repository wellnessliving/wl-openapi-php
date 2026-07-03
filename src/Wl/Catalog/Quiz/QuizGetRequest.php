<?php

namespace WlSdk\Wl\Catalog\Quiz;

class QuizGetRequest
{
    /**
     * List of purchase items. Each element has format `[id_purchase_item]::[k_id]`, where
     *
     * Empty if no purchases are made for booking.
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * Key of a business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of a user who is making a purchase.
     *
     * `null` in case when quizzes requested for guest.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_purchase_item' => $this->a_purchase_item,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
