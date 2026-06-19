<?php
namespace WlSdk\Thoth\WlPay\Account\Charge;

use WlSdk\WlSdkClient;

/**
 * Refills the user account balance by the specified payment amount or adjusts it manually.
 */
class ChargeApi
{
    /**
     * The account charge mode.
     * 
     * One of the [RsPayAccountChargeSid](#/components/schemas/RsPayAccountChargeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_pay_account_charge = null;

    /**
     * If `true`, the account is filled by a staff member in the backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    /**
     * The ID of the business the user account belongs to.
     * 
     * This shouldn't be passed if a user account has already been created.
     * In such cases, `k_pay_account` should be passed instead.
     * 
     * If both the business ID and account ID passed, the system checks if the given business is the owner of the
     * specified account.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The ID of the user account to refill.
     * 
     * This may be 0 if a user account hasn't been created yet.
     * In such cases, `k_business` and `uid` should be passed instead.
     * 
     * If not passed, the currency of account equals the default business currency.
     *
     * @var string|null
     */
    public ?string $k_pay_account = null;

    /**
     * The ID of the user whose account is being refilled.
     * 
     * This shouldn't be passed if a user account has already been created.
     * In such cases, `k_pay_account` should be passed instead.
     * 
     * If both the user ID and account ID passed, the system checks if the given user is the owner of the specified
     * account.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * The source mode key. One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The payment amount.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * The transaction comment.
     *
     * @var string|null
     */
    public ?string $s_comment = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Refills the user account balance by the specified payment amount or adjusts it manually.
     *
     * Accepts the payment amount, account key or user-and-business identifiers, charge mode, and payment form
     * data. Processes the payment through the configured payment environment and returns the purchase key
     * when a new purchase is created (for the automatic charge mode).
     *
     * @return ChargeApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ChargeApiPostResponse
    {
        return new ChargeApiPostResponse($this->client->request('/Thoth/WlPay/Account/Charge/Charge.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_pay_account_charge' => $this->id_pay_account_charge,
            'is_staff' => $this->is_staff,
            'k_business' => $this->k_business,
            'k_pay_account' => $this->k_pay_account,
            'uid' => $this->uid,
            'a_pay_form' => $this->a_pay_form,
            'id_mode' => $this->id_mode,
            'm_amount' => $this->m_amount,
            's_comment' => $this->s_comment,
            ],
            static fn($v) => $v !== null
        );
    }
}
