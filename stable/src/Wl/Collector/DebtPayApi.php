<?php
namespace WlSdk\Wl\Collector;

use WlSdk\WlSdkClient;

/**
 * Registers a debt payment made outside WellnessLiving and applies a credit to the client's account balance.
 */
class DebtPayApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * The currency of the payment.
One of [CurrencySid](#/components/schemas/Core.Locale.CurrencySid) constants.

Important! The currency must coincide with currency of the debt that was sent to collections.
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
One of [RsPayMethodSid](#/components/schemas/RsPayMethodSid) constants.

`null` if the payment method is unknown. In such cases, [RsPayMethodSid::CASH](#/components/schemas/RsPayMethodSid) would be used.
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
     * @return array Parsed JSON response data.
     *   - string k_pay_transaction: The transaction key generated to register the payment.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Collector/DebtPay.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
