<?php
namespace WlSdk\Wl\Staff\StaffView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about staff.
 */
class StaffView74Api
{
    /**
     * A list of staff user IDs.
     *
     * @var string[]|null
     */
    public ?array $a_uid_staff_list = null;

    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The staff member user ID.
     * A staff member can work for more than one business.
     * This key can be found using the [StaffListApi](/Wl/Staff/StaffList/StaffList.json) endpoint.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about staff.
     *
     * This method can accept or one staff key [StaffViewApi](/Wl/Staff/StaffView/StaffView.json) or staff list
     * [StaffViewApi](/Wl/Staff/StaffView/StaffView.json) but not both (exception would be thrown).
     *
     * @return StaffView74ApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): StaffView74ApiGetResponse
    {
        return new StaffView74ApiGetResponse($this->client->request('/Wl/Staff/StaffView/StaffView74.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_uid_staff_list' => $this->a_uid_staff_list,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'k_business' => $this->k_business,
            'uid_staff' => $this->uid_staff,
            ],
            static fn($v) => $v !== null
        );
    }
}
