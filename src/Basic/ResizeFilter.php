<?php
namespace RDM\Assetic\Filter\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Image\ImageInterface;
use Imagine\Image\BoxInterface;
use Imagine\Filter\Basic\Resize;

/**
 * A resize filter
 */
class ResizeFilter extends ImagineFilter
{

    private $filter;

    /**
     * Constructs Resize filter with given width and height
     *
     * @param ImagineInterface $imagine
     * @param BoxInterface $size
     * @param string $filter
     */
    public function __construct(ImagineInterface $imagine, BoxInterface $size, $filter = ImageInterface::FILTER_UNDEFINED)
    {
        parent::__construct($imagine, new Resize($size, $filter));
    }
}
