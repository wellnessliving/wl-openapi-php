<?php

namespace WlSdk\Wl\Video;

/**
 * Response from PUT
 */
class VideoElementPutResponse
{
    /**
     * Embedded video source.
     * One of {@link \WlSdk\Wl\Video\VideoEmbedSourceSid} constants.
     *
     * `null` if video is uploaded.
     *
     * @var int|null
     * @see \WlSdk\Wl\Video\VideoEmbedSourceSid
     */
    public ?int $id_embed_source = null;

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
        $this->id_embed_source = isset($data['id_embed_source']) ? (int)$data['id_embed_source'] : null;
        $this->json_setup = isset($data['json_setup']) ? (string)$data['json_setup'] : null;
    }
}
