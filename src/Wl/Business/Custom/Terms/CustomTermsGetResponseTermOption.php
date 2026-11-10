<?php

namespace WlSdk\Wl\Business\Custom\Terms;

class CustomTermsGetResponseTermOption
{
    /**
     * Term. One of {@link \WlSdk\Wl\Business\Custom\Terms\CustomTermSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Custom\Terms\CustomTermSid
     */
    public ?int $id_term = null;

    /**
     * Selected custom term option. Sid class depends on `id_term`
     * (e.g. for {@link \WlSdk\Wl\Business\Custom\Terms\CustomTermSid}, this is one of {@link
     * \WlSdk\Wl\Business\Custom\Terms\ClientTermOptionSid} constants).
     *
     * `null` if the slot has no customization - the business-type default, or the system default
     * if the business type has none either, applies.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Custom\Terms\ClientTermOptionSid
     */
    public ?int $id_term_option = null;

    public function __construct(array $data)
    {
        $this->id_term = isset($data['id_term']) ? (int)$data['id_term'] : null;
        $this->id_term_option = isset($data['id_term_option']) ? (int)$data['id_term_option'] : null;
    }
}
