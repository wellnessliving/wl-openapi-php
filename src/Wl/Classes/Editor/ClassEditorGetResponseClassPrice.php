<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseClassPrice
{
    /**
     * Last day of the early bird discount.
     *
     * Empty string if the class has no early bird discount.
     *
     * @var string|null
     */
    public ?string $dl_early = null;

    /**
     * Deposit a client leaves while booking the class.
     *
     * A percent of the price of the class while `is_deposit_percent` is `true`, an amount of
     * money otherwise. Only taken into account while `id_pay_require` is
     * {@link \WlSdk\Wl\Classes\RequirePaySid}.
     *
     * @var string|null
     */
    public ?string $f_deposit = null;

    /**
     * Early bird price of the class.
     *
     * Only taken into account while `is_early` is `true`.
     *
     * @var string|null
     */
    public ?string $f_early = null;

    /**
     * Price of one session of the class.
     *
     * Only taken into account while `is_buy_single` is `true`.
     *
     * @var string|null
     */
    public ?string $f_price = null;

    /**
     * Price of the whole class.
     *
     * Only taken into account while `is_buy_total` is `true`.
     *
     * @var string|null
     */
    public ?string $f_price_total = null;

    /**
     * `true` if the price of a single session is hidden from a client who has an applicable Purchase Option,
     * `false` if it is shown to them.
     *
     * @var bool|null
     */
    public ?bool $hide_price = null;

    /**
     * Way a client pays for the class.
     *
     * @var int|null
     * @see \WlSdk\Wl\Classes\RequirePaySid
     */
    public ?int $id_pay_require = null;

    /**
     * `true` if a client pays for the class with a Purchase Option only, `false` otherwise.
     *
     * One of the three ways a client pays for the class, which are mutually exclusive:
     * `is_buy_promotion`, `is_buy_single` and
     * `is_buy_total`.
     *
     * @var bool|null
     */
    public ?bool $is_buy_promotion = null;

    /**
     * `true` if a client buys one session of the class at a time, `false` otherwise.
     *
     * See `is_buy_promotion` for the other ways a client pays for the class.
     *
     * @var bool|null
     */
    public ?bool $is_buy_single = null;

    /**
     * `true` if a client buys the whole class at once, `false` otherwise.
     *
     * Defaults to `true`, the same as the legacy form offers for a new event. See
     * `is_buy_promotion` for the other ways a client pays for the class.
     *
     * @var bool|null
     */
    public ?bool $is_buy_total = null;

    /**
     * `true` if `f_deposit` is a percent of the price of the class, `false` if it is an
     * amount of money.
     *
     * @var bool|null
     */
    public ?bool $is_deposit_percent = null;

    /**
     * `true` if the class has an early bird discount, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_early = null;

    /**
     * `true` if taxes are applied to the sales of the class, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_tax_enable = null;

    /**
     * Last day of the early bird discount as the calendar of the form shows it.
     *
     * Empty string if the class has no early bird discount. `dl_early` carries the same day
     * in the format the form posts, and is the one the save reads: only the server sets this field, and a value
     * posted by the client is ignored.
     *
     * @var string|null
     */
    public ?string $text_early = null;

    public function __construct(array $data)
    {
        $this->dl_early = isset($data['dl_early']) ? (string)$data['dl_early'] : null;
        $this->f_deposit = isset($data['f_deposit']) ? (string)$data['f_deposit'] : null;
        $this->f_early = isset($data['f_early']) ? (string)$data['f_early'] : null;
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->f_price_total = isset($data['f_price_total']) ? (string)$data['f_price_total'] : null;
        $this->hide_price = isset($data['hide_price']) ? (bool)$data['hide_price'] : null;
        $this->id_pay_require = isset($data['id_pay_require']) ? (int)$data['id_pay_require'] : null;
        $this->is_buy_promotion = isset($data['is_buy_promotion']) ? (bool)$data['is_buy_promotion'] : null;
        $this->is_buy_single = isset($data['is_buy_single']) ? (bool)$data['is_buy_single'] : null;
        $this->is_buy_total = isset($data['is_buy_total']) ? (bool)$data['is_buy_total'] : null;
        $this->is_deposit_percent = isset($data['is_deposit_percent']) ? (bool)$data['is_deposit_percent'] : null;
        $this->is_early = isset($data['is_early']) ? (bool)$data['is_early'] : null;
        $this->is_tax_enable = isset($data['is_tax_enable']) ? (bool)$data['is_tax_enable'] : null;
        $this->text_early = isset($data['text_early']) ? (string)$data['text_early'] : null;
    }
}
