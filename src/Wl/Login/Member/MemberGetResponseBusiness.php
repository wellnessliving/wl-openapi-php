<?php

namespace WlSdk\Wl\Login\Member;

class MemberGetResponseBusiness
{
    /**
     * `true` if the user is allowed to sign in into this business; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_enter = null;

    /**
     * If `true`, then the business is a franchisee. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_franchisee = null;

    /**
     * If `true`, then the business is a franchisor. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_franchisor = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The business key of the Enterprise Headquarters account (if applicable).
     *
     * @var string|null
     */
    public ?string $k_business_franchisor = null;

    /**
     * The title of the business.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->can_enter = isset($data['can_enter']) ? (bool)$data['can_enter'] : null;
        $this->is_franchisee = isset($data['is_franchisee']) ? (bool)$data['is_franchisee'] : null;
        $this->is_franchisor = isset($data['is_franchisor']) ? (bool)$data['is_franchisor'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_business_franchisor = isset($data['k_business_franchisor']) ? (string)$data['k_business_franchisor'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
