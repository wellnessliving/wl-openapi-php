<?php

namespace WlSdk\Wl\Announcement;

class AnnouncementListGetResponseList
{
    /**
     * Location keys where the announcement is published.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Creation date in local MySQL format.
     *
     * @var string|null
     */
    public ?string $dtl_create = null;

    /**
     * Local date and time the announcement is published in MySQL format. `null` if not set.
     *
     * @var string|null
     */
    public ?string $dtl_publish = null;

    /**
     * Local date and time the announcement is unpublished in MySQL format. `null` if not set.
     *
     * @var string|null
     */
    public ?string $dtl_unpublish = null;

    /**
     * Announcement description as HTML.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Announcement description text stripped of HTML tags.
     *
     * @var string|null
     */
    public ?string $html_description_clear = null;

    /**
     * Sort order. `null` if the announcement is not pinned.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * Announcement status ID. One of {@link \WlSdk\Wl\Announcement\AnnouncementStatusEnum} constants.
     *
     * @var int|null
     */
    public ?int $id_status = null;

    /**
     * `true` if the announcement is pinned, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_pin = null;

    /**
     * Announcement key.
     *
     * @var string|null
     */
    public ?string $k_announcement = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Formatted creation date.
     *
     * @var string|null
     */
    public ?string $text_create_date = null;

    /**
     * Formatted publish date.
     *
     * @var string|null
     */
    public ?string $text_publish_date = null;

    /**
     * Formatted publish date with month name but without day of week.
     *
     * @var string|null
     */
    public ?string $text_publish_date_short = null;

    /**
     * Announcement title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Formatted unpublish date.
     *
     * @var string|null
     */
    public ?string $text_unpublish_date = null;

    /**
     * Key of the user who created the announcement.
     *
     * @var string|null
     */
    public ?string $uid_create = null;

    /**
     * URL of the announcement detail page.
     *
     * @var string|null
     */
    public ?string $url_detail = null;

    /**
     * URL of the announcement image.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    /**
     * Announcement description as XML.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->dtl_create = isset($data['dtl_create']) ? (string)$data['dtl_create'] : null;
        $this->dtl_publish = isset($data['dtl_publish']) ? (string)$data['dtl_publish'] : null;
        $this->dtl_unpublish = isset($data['dtl_unpublish']) ? (string)$data['dtl_unpublish'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_description_clear = isset($data['html_description_clear']) ? (string)$data['html_description_clear'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->is_pin = isset($data['is_pin']) ? (bool)$data['is_pin'] : null;
        $this->k_announcement = isset($data['k_announcement']) ? (string)$data['k_announcement'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->text_create_date = isset($data['text_create_date']) ? (string)$data['text_create_date'] : null;
        $this->text_publish_date = isset($data['text_publish_date']) ? (string)$data['text_publish_date'] : null;
        $this->text_publish_date_short = isset($data['text_publish_date_short']) ? (string)$data['text_publish_date_short'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_unpublish_date = isset($data['text_unpublish_date']) ? (string)$data['text_unpublish_date'] : null;
        $this->uid_create = isset($data['uid_create']) ? (string)$data['uid_create'] : null;
        $this->url_detail = isset($data['url_detail']) ? (string)$data['url_detail'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
    }
}
