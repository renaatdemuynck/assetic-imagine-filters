<?php
namespace RDM\Assetic\Filter\Basic;

use Assetic\Filter\FilterInterface;
use Assetic\Asset\AssetInterface;
use Imagine\Image\ImagineInterface;
use Imagine\Image\BoxInterface;
use Imagine\Image\ImageInterface;

/**
 * A thumbnail filter
 */
class ThumbnailFilter implements FilterInterface
{

    private $imagine;

    private $size;

    private $mode;

    private $filter;

    /**
     * Constructs the Thumbnail filter with given width, height and mode
     *
     * @param ImagineInterface $imagine
     * @param BoxInterface $size
     * @param string $mode
     * @param string $filter
     */
    public function __construct(ImagineInterface $imagine, BoxInterface $size, $mode = ImageInterface::THUMBNAIL_INSET, $filter = ImageInterface::FILTER_UNDEFINED)
    {
        $this->imagine = $imagine;
        $this->size = $size;
        $this->mode = $mode;
        $this->filter = $filter;
    }

    public function filterLoad(AssetInterface $asset)
    {}

    public function filterDump(AssetInterface $asset)
    {
        $image = $this->imagine->load($asset->getContent());
        $asset->setContent($image->thumbnail($this->size, $this->mode, $this->filter));
    }
}
