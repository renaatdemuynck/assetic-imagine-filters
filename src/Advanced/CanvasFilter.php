<?php
namespace RDM\Assetic\Filter\Advanced;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Image\BoxInterface;
use Imagine\Image\PointInterface;
use Imagine\Image\Palette\Color\ColorInterface;
use Imagine\Filter\Advanced\Canvas;

/**
 * A canvas filter
 */
class CanvasFilter extends ImagineFilter
{

    /**
     * Constructs the Canvas filter with given width and height and the
     * placement of the current image inside the new canvas
     *
     * @param ImagineInterface $imagine
     * @param BoxInterface $size
     * @param PointInterface $placement
     * @param ColorInterface $background
     */
    public function __construct(ImagineInterface $imagine, BoxInterface $size, PointInterface $placement = null, ColorInterface $background = null)
    {
        parent::__construct($imagine, new Canvas($size, $placement, $background));
    }
}
