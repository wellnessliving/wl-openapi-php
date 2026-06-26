<?php

namespace WlSdk\Wl\Announcement;

/**
 * Response from GET
 */
class AnnouncementElementGetResponse
{
    /**
     * List of locations keys.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * The date and time when the announcement was published.
     *
     * This will be `null` if the published date is not set yet.
     *
     * @var string|null
     */
    public ?string $dtl_publish = null;

    /**
     * The date and time when the announcement was unpublished.
     *
     * This will be `null` if the unpublished date is not set yet.
     *
     * @var string|null
     */
    public ?string $dtl_unpublish = null;

    /**
     * Announcement description.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Order to sort announcements.
     *
     * This will be `null` if sort order is not set yet (announcement is not pinned).
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\Language\LocaleLanguageSid
     */
    public ?int $i_order = null;

    /**
     * Announcement status ID.
     *
     * @var int|null
     * @see \WlSdk\Wl\Announcement\AnnouncementStatusEnum
     */
    public ?int $id_status = null;

    /**
     * Announcement key.
     *
     * @var string|null
     */
    public ?string $k_announcement = null;

    /**
     * The string representation of the announcement's image key.
     *
     * `null` if the announcement doesn't have an image.
     *
     * @var string|null
     */
    public ?string $k_announcement_image = null;

    /**
     * The date and time when the announcement was published in human format.
     *
     * @var string|null
     */
    public ?string $text_publish_date = null;

    /**
     * The date when the announcement was published in human format.
     *
     * @var string|null
     */
    public ?string $text_publish_date_short = null;

    /**
     * Title of announcement.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Announcement image url.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    /**
     * Description of announcement.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->dtl_publish = isset($data['dtl_publish']) ? (string)$data['dtl_publish'] : null;
        $this->dtl_unpublish = isset($data['dtl_unpublish']) ? (string)$data['dtl_unpublish'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->k_announcement = isset($data['k_announcement']) ? (string)$data['k_announcement'] : null;
        $this->k_announcement_image = isset($data['k_announcement_image']) ? (string)$data['k_announcement_image'] : null;
        $this->text_publish_date = isset($data['text_publish_date']) ? (string)$data['text_publish_date'] : null;
        $this->text_publish_date_short = isset($data['text_publish_date_short']) ? (string)$data['text_publish_date_short'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
    }
}
