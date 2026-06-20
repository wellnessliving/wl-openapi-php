<?php

namespace WlSdk\Wl\Classes\Promotion;

class ClassPromotionGetRequest
{
    /**
     * Determines whether the class is an event or not.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * `true` - the login type or group restrictions are ignored and all pricing options will be returned. This
     * will
     * require staff or admin access level.
     *
     * `false` - the API should return only pricing options, which are available for the current user.
     *
     * @var bool|null
     */
    public ?bool $is_login_type_ignore = null;

    /**
     * `true` - promotions should only be returned if they're related to the given class or event.
     *
     * `false` - all promotions should be returned, even if they aren't related to the given class or event.
     *
     * @var bool|null
     */
    public ?bool $is_related_only = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class key.
     *
     * This refers to the class or event with which you want to connect the promotions. This will be `null` or `0`
     * if you
     * need to return a list of promotions for an uncreated class or event.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_event' => $this->is_event,
            'is_login_type_ignore' => $this->is_login_type_ignore,
            'is_related_only' => $this->is_related_only,
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            ],
            static fn ($v) => $v !== null
        );
    }
}
