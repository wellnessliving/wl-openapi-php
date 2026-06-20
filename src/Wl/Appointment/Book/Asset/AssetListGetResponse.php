<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

/**
 * Response from GET
 */
class AssetListGetResponse
{
    /**
     * No description.
     *
     * @var AssetListGetResponseAsset[]|null
     */
    public ?array $a_asset = null;

    /**
     * A list of reserved assets.
     *
     * 1st level keys refer to asset keys.
     * 2nd level keys refer to asset numbers.
     * Values are keys of appointment bookings that reserve the asset, or `true` if the asset is reserved by a
     * class or event.
     *
     * For example, if you want to check if the 10th asset with the key of '15' is reserved,
     * you can check if `a_resource_busy[&#039;15&#039;][&#039;10&#039;]` is free.
     *
     * If you're rebooking an appointment, check the value of `a_resource_busy[&#039;15&#039;][&#039;10&#039;]`.
     * If it's equal to the key of your current appointment booking, you can assume the asset is available.
     *
     * @var string|bool[][]|null
     */
    public ?array $a_asset_busy = null;

    /**
     * The asset layout key.
     * May be empty if asset category has no layout.
     *
     * @var string|null
     */
    public ?string $k_resource_layout = null;

    public function __construct(array $data)
    {
        $this->a_asset = isset($data['a_asset']) ? array_map(static fn ($item) => new AssetListGetResponseAsset((array)$item), (array)$data['a_asset']) : null;
        $this->a_asset_busy = isset($data['a_asset_busy']) ? (array)$data['a_asset_busy'] : null;
        $this->k_resource_layout = isset($data['k_resource_layout']) ? (string)$data['k_resource_layout'] : null;
    }
}
