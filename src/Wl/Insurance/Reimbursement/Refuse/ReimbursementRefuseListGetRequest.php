<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Refuse;

class ReimbursementRefuseListGetRequest
{
    /**
     * Status of the refuse message. One of {@link
     * \WlSdk\Wl\Insurance\Reimbursement\Refuse\Filter\FilterRefuseMessageSelectSid} constants.
     * Default value {@link \WlSdk\Wl\Insurance\Reimbursement\Refuse\Filter\FilterRefuseMessageSelectSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Insurance\Reimbursement\Refuse\Filter\FilterRefuseMessageSelectSid
     */
    public ?int $id_refuse_message = null;

    /**
     * Insurance provider key. Primary key in PartnerSql table, `null` if field is not set.
     *
     * @var string|null
     */
    public ?string $k_insurance_provider = null;

    /**
     * Code of the reason, which should be unique per partner.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_refuse_message' => $this->id_refuse_message,
            'k_insurance_provider' => $this->k_insurance_provider,
            'text_code' => $this->text_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
