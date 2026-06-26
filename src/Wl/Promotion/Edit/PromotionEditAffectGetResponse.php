<?php

namespace WlSdk\Wl\Promotion\Edit;

/**
 * Response from GET
 */
class PromotionEditAffectGetResponse
{
    /**
     * Number of clients who has purchased promotion without editing.
     *
     * @var int|null
     */
    public ?int $i_clients = null;

    /**
     * Number of clients who has purchased and edited promotion.
     *
     * @var int|null
     */
    public ?int $i_clients_edited = null;

    /**
     * Whether any clients including with promotion edited have their membership extended.
     *
     * @var bool|null
     */
    public ?bool $is_extend_all = null;

    /**
     * Whether clients without edited promotion have their membership extended.
     *
     * @var bool|null
     */
    public ?bool $is_extend_without_edited = null;

    /**
     * Url of list of the promotion affected clients where sold promotions were not edited.
     *
     * @var string|null
     */
    public ?string $url_affected_clients = null;

    /**
     * Url of list of the promotion affected clients.
     *
     * @var string|null
     */
    public ?string $url_affected_clients_edited = null;

    public function __construct(array $data)
    {
        $this->i_clients = isset($data['i_clients']) ? (int)$data['i_clients'] : null;
        $this->i_clients_edited = isset($data['i_clients_edited']) ? (int)$data['i_clients_edited'] : null;
        $this->is_extend_all = isset($data['is_extend_all']) ? (bool)$data['is_extend_all'] : null;
        $this->is_extend_without_edited = isset($data['is_extend_without_edited']) ? (bool)$data['is_extend_without_edited'] : null;
        $this->url_affected_clients = isset($data['url_affected_clients']) ? (string)$data['url_affected_clients'] : null;
        $this->url_affected_clients_edited = isset($data['url_affected_clients_edited']) ? (string)$data['url_affected_clients_edited'] : null;
    }
}
