<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseInstallmentTemplate
{
    /**
     * The number of payments.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * The duration of a single period. One of the {@link \WlSdk\ADurationSid} constants.
     *
     * @var \WlSdk\ADurationSid|null
     */
    public ?\WlSdk\ADurationSid $id_duration = null;

    /**
     * The number of periods specified by `id_period` between individual payments.
     *
     * @var int|null
     */
    public ?int $i_period = null;

    /**
     * The payment currency Key.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * The key of the installment plan template.
     *
     * @var string|null
     */
    public ?string $k_pay_installment_template = null;

    /**
     * The amount of the installment plan.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * The title of the installment plan.
     *
     * @var string|null
     */
    public ?string $s_duration = null;

    public function __construct(array $data)
    {
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->id_duration = isset($data['id_duration']) ? \WlSdk\ADurationSid::tryFrom((int)$data['id_duration']) : null;
        $this->i_period = isset($data['i_period']) ? (int)$data['i_period'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->k_pay_installment_template = isset($data['k_pay_installment_template']) ? (string)$data['k_pay_installment_template'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->s_duration = isset($data['s_duration']) ? (string)$data['s_duration'] : null;
    }
}
