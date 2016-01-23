<?php
namespace RDM\Assetic\Filter\Advanced;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Image\Palette\Color\ColorInterface;
use Imagine\Filter\Advanced\Border;

/**
 * A border filter
 */
class BorderFilter extends ImagineFilter
{

    /**
     * Constructs the Border filter with given color, width and height
     *
     * @param ImagineInterface $imagine
     * @param ColorInterface $color
     * @param integer $width Width of the border on the left and right sides of the image
     * @param integer $height Height of the border on the top and bottom sides of the image
     */
    public function __construct(ImagineInterface $imagine, ColorInterface $color, $width = 1, $height = 1)
    {
        parent::__construct($imagine, new Border($color, $width, $height));
    }
}
