<?php
namespace WlSdk\Wl\Book\Process;

use WlSdk\WlSdkClient;

/**
 * Processes the group booking: validates input, collects payment, books sessions, and sends confirmation emails.
 */
class ProcessGroupApi
{
    /**
     * Date/time to which session is booked.
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * The mode type. One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * `true` if action is performed as a staff member; `false` otherwise.
     * 
     * If `true` is sent, access to the business and to the client will be checked.
     * If `false` is sent, user can book only for himself or for relatives if this is allowed in business settings.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag
     * is set to `false`.
     * 
     * Use this field with caution.
     * The final booking will not use this flag, and the check will still be performed.
     *
     * @var bool|null
     */
    public ?bool $is_credit_card_check = null;

    /**
     * Key of session which is booked.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_client = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * `true` if user pressed 'Pay later'.
     * `false` if user pressed 'Pay now'.
     *
     * @var bool|null
     */
    public ?bool $is_force_pay_later = null;

    /**
     * The installment template primary key.
     * `null` to not use installment template.
     *
     * @var string|null
     */
    public ?string $k_pay_installment_template = null;

    /**
     * The discount code to be applied to the purchase.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Processes the group booking: validates input, collects payment, books sessions, and sends confirmation emails.
     *
     * Accepts a list of clients with their purchase items, resources, sessions, and quiz responses, then validates
     * capacity and eligibility, processes payment for all clients at once, creates booking records, and dispatches
     * confirmation emails. Returns visit keys, activity keys, and purchase activity key upon success.
     *
     * @return ProcessGroupApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ProcessGroupApiPostResponse
    {
        return new ProcessGroupApiPostResponse($this->client->request('/Wl/Book/Process/ProcessGroup.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date_gmt' => $this->dt_date_gmt,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_class_period' => $this->k_class_period,
            'a_client' => $this->a_client,
            'a_pay_form' => $this->a_pay_form,
            'is_force_pay_later' => $this->is_force_pay_later,
            'k_pay_installment_template' => $this->k_pay_installment_template,
            'text_discount_code' => $this->text_discount_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
