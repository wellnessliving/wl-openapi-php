<?php
namespace WlSdk\Wl\Business\Partner;

/**
 * Response from GET
 */
class PartnerSettingsGetResponse
{
    /**
     * The homepage tour of the business, which depends on the type.
     *
     * @var int|null
     */
    public ?int $id_business_tour = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The first name of the business representative.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * The last name of the business representative.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * The job title of the business representative.
     *
     * @var string|null
     */
    public ?string $text_position = null;

    /**
     * The text of the review about the WellnessLiving system.
     *
     * @var string|null
     */
    public ?string $text_review = null;

    /**
     * A link to the photo of the business representative.
     * 
     * `null` in case when image is not uploaded.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->id_business_tour = isset($data['id_business_tour']) ? (int)$data['id_business_tour'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
        $this->text_position = isset($data['text_position']) ? (string)$data['text_position'] : null;
        $this->text_review = isset($data['text_review']) ? (string)$data['text_review'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
