<?php

namespace WlSdk\Wl\Visit\Kiosk;

class EvaluateGetResponseLoginPromotion
{
    /**
     * Last day of the pass, local date in MySQL format. `null` if the pass does not expire.
     *
     * @var string|null
     */
    public ?string $dl_expire = null;

    /**
     * Number of the visits that the pass gives, `null` if the pass does not limit them.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Number of the visits left before the check-in. `null` if the pass is unlimited.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * `true` if the pass is limited and has 2 or fewer visits left before the check-in.
     *
     * @var bool|null
     */
    public ?bool $is_last = null;

    /**
     * `true` if the pass does not limit the visits.
     *
     * @var bool|null
     */
    public ?bool $is_unlimited = null;

    /**
     * `true` if the check-in would take this pass.
     *
     * @var bool|null
     */
    public ?bool $is_use = null;

    /**
     * Key of the pass; for a pass inside a package, the key of the package.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Title of the pass.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->dl_expire = isset($data['dl_expire']) ? (string)$data['dl_expire'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->is_last = isset($data['is_last']) ? (bool)$data['is_last'] : null;
        $this->is_unlimited = isset($data['is_unlimited']) ? (bool)$data['is_unlimited'] : null;
        $this->is_use = isset($data['is_use']) ? (bool)$data['is_use'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
