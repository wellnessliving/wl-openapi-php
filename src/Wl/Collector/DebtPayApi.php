<?php
namespace WlSdk\Wl\Collector;

use WlSdk\WlSdkClient;

/**
 * Registers a debt payment made outside WellnessLiving and applies a credit to the client's account balance.
 */
class DebtPayApi
{
    /**
     * The currency of the payment.
     * One of [CurrencySid](#/components/schemas/Core.Locale.CurrencySid) constants.
     * 
     * Important! The currency must coincide with currency of the debt that was sent to collections.
     *
     * @var int|null
     */
    public ?int $id_currency = null;

    /**
     * The key of the business from which the debt originates.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user with the debt.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The payment method ID.
     * One of [RsPayMethodSid](#/components/schemas/RsPayMethodSid) constants.
     * 
     * `null` if the payment method is unknown. In such cases,
     * [RsPayMethodSid::CASH](#/components/schemas/RsPayMethodSid) would be used.
     *
     * @var int|null
     */
    public ?int $id_pay_method = null;

    /**
     * The debt key towards which the payment was performed.
     *
     * @var string|null
     */
    public ?string $k_collector_debt = null;

    /**
     * The amount of money that's been paid towards the debt.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Registers a debt payment made outside WellnessLiving and applies a credit to the client's account balance.
     *
     * Used by collectors to record cash or external payments against outstanding debts. The specified
     * amount is credited to the client's account and the debt status is updated accordingly.
     * Requires an active Collections subscription and the business privilege or emulation access.
     *
     * @return DebtPayApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): DebtPayApiPostResponse
    {
        return new DebtPayApiPostResponse($this->client->request('/Wl/Collector/DebtPay.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_currency' => $this->id_currency,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'id_pay_method' => $this->id_pay_method,
            'k_collector_debt' => $this->k_collector_debt,
            'm_amount' => $this->m_amount,
            ],
            static fn($v) => $v !== null
        );
    }
}
