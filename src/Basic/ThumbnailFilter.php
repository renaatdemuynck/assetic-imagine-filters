<?php
namespace RDM\Assetic\Filter\Basic;

use RDM\Assetic\Filter\AbstractImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Image\BoxInterface;
use Imagine\Image\ImageInterface;
use Imagine\Filter\Basic\Thumbnail;

/**
 * A thumbnail filter
 */
class ThumbnailFilter extends AbstractImagineFilter
{

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
        parent::__construct($imagine, new Thumbnail($size, $mode, $filter));
    }
}
