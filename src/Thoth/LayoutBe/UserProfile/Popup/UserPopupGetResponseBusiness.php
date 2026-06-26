<?php

namespace WlSdk\Thoth\LayoutBe\UserProfile\Popup;

class UserPopupGetResponseBusiness
{
    /**
     * Business key. Primary key from the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
