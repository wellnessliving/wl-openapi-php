<?php
namespace WlSdk\Wl\Video;

/**
 * Response from GET
 */
class VideoListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_list = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_page = null;

    /**
     * Embedded video source.
     * One of [VideoEmbedSourceSid](#/components/schemas/Wl.Video.VideoEmbedSourceSid) constants.
     * 
     * `null` if video is uploaded.
     *
     * @var int|null
     */
    public ?int $id_embed_source = null;

    /**
     * Sort order ID. One of [SortOrderSid](#/components/schemas/Core.Sid.SortOrderSid) constants. `null` or 0 if
     * order is undefined and depends on sort order.
     *
     * @var int|null
     */
    public ?int $id_order = null;

    /**
     * The sorting type.
     * A constant from [FilterSortSid](#/components/schemas/Wl.Video.Catalog.Filter.Sort.FilterSortSid). `null` or
     * 0 if sort is undefined and custom sort order is used.
     *
     * @var int|null
     */
    public ?int $id_sort = null;

    /**
     * Video.js media player initialization parameters in JSON format.
     * 
     * Usage example:
     *      <script>
     *          videojs($('video'), {
     *              "techOrder": ["Vimeo"],
     *              "sources": [
     *                  {"type": "video/vimeo", "src": "https://vimeo.com/123456789"}
     *              ]
     *          });
     *      </script>
     *
     * @var string|null
     */
    public ?string $json_setup = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
        $this->a_page = isset($data['a_page']) ? (array)$data['a_page'] : null;
        $this->id_embed_source = isset($data['id_embed_source']) ? (int)$data['id_embed_source'] : null;
        $this->id_order = isset($data['id_order']) ? (int)$data['id_order'] : null;
        $this->id_sort = isset($data['id_sort']) ? (int)$data['id_sort'] : null;
        $this->json_setup = isset($data['json_setup']) ? (string)$data['json_setup'] : null;
    }
}
