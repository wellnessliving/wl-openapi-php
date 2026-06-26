<?php

namespace WlSdk\Thoth\LayoutBe\UserProfile\Popup;

class UserPopupGetResponseLocation
{
    /**
     * Location business key. Primary key from the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location title.
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
