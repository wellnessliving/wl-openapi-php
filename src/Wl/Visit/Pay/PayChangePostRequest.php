<?php

namespace WlSdk\Wl\Visit\Pay;

class PayChangePostRequest
{
    /**
     * Business key.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class period key.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Current user ID.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Selected pay option to save. The value with one of next structures:
     * * `k_login_promotion`:`[k_login_promotion]`
     * * `k_session_pass`:`[k_session_pass]`
     *
     * @var string|null
     */
    public ?string $text_key = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'uid' => $this->uid,
            'text_key' => $this->text_key,
            ],
            static fn ($v) => $v !== null
        );
    }
}
