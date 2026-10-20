<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

class AssetListGetResponseAssetConfigMemberGroupBookWindow
{
    /**
     * The advance booking window duration for this member group.
     *
     * @var int|null
     */
    public ?int $i_book_future = null;

    /**
     * The duration type for the advance booking window. One of {@link \WlSdk\ADurationSid} constants.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_book_future = null;

    public function __construct(array $data)
    {
        $this->i_book_future = isset($data['i_book_future']) ? (int)$data['i_book_future'] : null;
        $this->id_book_future = isset($data['id_book_future']) ? (int)$data['id_book_future'] : null;
    }
}
