<?php
namespace WlSdk\Wl\Video;

/**
 * Response from PUT
 */
class VideoListPutResponse
{
    /**
     * Embedded video source.
     * One of {@link \WlSdk\Wl\Video\VideoEmbedSourceSid} constants.
     * 
     * `null` if video is uploaded.
     *
     * @var \WlSdk\Wl\Video\VideoEmbedSourceSid|null
     */
    public ?\WlSdk\Wl\Video\VideoEmbedSourceSid $id_embed_source = null;

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
        $this->id_embed_source = isset($data['id_embed_source']) ? \WlSdk\Wl\Video\VideoEmbedSourceSid::tryFrom((int)$data['id_embed_source']) : null;
        $this->json_setup = isset($data['json_setup']) ? (string)$data['json_setup'] : null;
    }
}
