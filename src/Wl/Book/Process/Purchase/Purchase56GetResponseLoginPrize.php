<?php
namespace WlSdk\Wl\Book\Process\Purchase;

class Purchase56GetResponseLoginPrize
{
    /**
     * The price, always '0'.
     *
     * @var string|null
     */
    public ?string $f_price = null;

    /**
     * Login prize remaining quantity.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * The limit of sessions that can be booked with reward prize.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The ID of Purchase Option type. One of the {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * The key of the Purchase Option in the database. The table depends on `id_purchase_item`.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Key of login prize.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    /**
     * The unique identifier.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    /**
     * User-friendly login prize description.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_login_prize = isset($data['k_login_prize']) ? (string)$data['k_login_prize'] : null;
        $this->s_value = isset($data['s_value']) ? (string)$data['s_value'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
