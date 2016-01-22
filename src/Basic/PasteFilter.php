<?php
namespace RDM\Assetic\Filter\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Image\ImageInterface;
use Imagine\Image\PointInterface;
use Imagine\Filter\Basic\Paste;

/**
 * A paste filter
 */
class PasteFilter extends ImagineFilter
{

    /**
     * Constructs a Paste filter with given ImageInterface to paste and x, y
     * coordinates of target position
     *
     * @param ImagineInterface $imagine
     * @param ImageInterface $image
     * @param PointInterface $start
     */
    public function __construct(ImagineInterface $imagine, ImageInterface $image, PointInterface $start)
    {
        parent::__construct($imagine, new Paste($image, $start));
    }
}
