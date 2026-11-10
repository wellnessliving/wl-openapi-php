<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

class AssetListGetResponseAssetConfig
{
    /**
     * Member group overrides for the advance booking window, keyed by member group key.
     * Each value has the following structure:
     *
     *
     * Empty array if no member group overrides are set.
     *
     * @var AssetListGetResponseAssetConfigMemberGroupBookWindow|null
     */
    public ?AssetListGetResponseAssetConfigMemberGroupBookWindow $a_member_group_book_window = null;

    /**
     * The minimum time before a session starts that a booking can be made.
     *
     * @var int|null
     */
    public ?int $i_book_before = null;

    /**
     * The maximum advance booking window duration.
     *
     * @var int|null
     */
    public ?int $i_book_future = null;

    /**
     * The duration type for the minimum booking time. One of {@link \WlSdk\ADurationSid} constants.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_book_before = null;

    /**
     * The duration type for the advance booking window. One of {@link \WlSdk\ADurationSid} constants.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_book_future = null;

    public function __construct(array $data)
    {
        $this->a_member_group_book_window = isset($data['a_member_group_book_window']) ? new AssetListGetResponseAssetConfigMemberGroupBookWindow((array)$data['a_member_group_book_window']) : null;
        $this->i_book_before = isset($data['i_book_before']) ? (int)$data['i_book_before'] : null;
        $this->i_book_future = isset($data['i_book_future']) ? (int)$data['i_book_future'] : null;
        $this->id_book_before = isset($data['id_book_before']) ? (int)$data['id_book_before'] : null;
        $this->id_book_future = isset($data['id_book_future']) ? (int)$data['id_book_future'] : null;
    }
}
