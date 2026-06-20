<?php
namespace WlSdk\Wl\Appointment\Book\Asset;

class AssetListGetResponseAssetPeriod
{
    /**
     * The HTML code used to display the asset duration.
     *
     * @var string|null
     */
    public ?string $html_duration = null;

    /**
     * The HTML code used to display the formatted price.
     *
     * @var string|null
     */
    public ?string $html_price = null;

    /**
     * The asset duration in minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * The asset period price type. One of {@link \WlSdk\RsServicePriceSid} constants.
     *
     * @var int|null
     */
    public ?int $id_price = null;

    /**
     * The asset period price.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    public function __construct(array $data)
    {
        $this->html_duration = isset($data['html_duration']) ? (string)$data['html_duration'] : null;
        $this->html_price = isset($data['html_price']) ? (string)$data['html_price'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->id_price = isset($data['id_price']) ? (int)$data['id_price'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
    }
}
