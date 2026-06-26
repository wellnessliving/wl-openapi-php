<?php

namespace WlSdk\Wl\Business\Search;

class BusinessInfoGetResponseResult
{
    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business address.
     *
     * @var string|null
     */
    public ?string $s_location = null;

    /**
     * Business name.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Business URL address to sign in.
     *
     * @var string|null
     */
    public ?string $url_business = null;

    /**
     * Path to business logo.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->s_location = isset($data['s_location']) ? (string)$data['s_location'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->url_business = isset($data['url_business']) ? (string)$data['url_business'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
