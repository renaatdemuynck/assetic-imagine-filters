<?php
namespace RDM\Assetic\Filter\Imagine\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Image\Palette\Color\ColorInterface;
use Imagine\Filter\Basic\Rotate;

/**
 * A rotate filter
 */
class RotateFilter extends ImagineFilter
{

    /**
     * Constructs Rotate filter with given angle and background color
     *
     * @param ImagineInterface $imagine
     * @param integer        $angle
     * @param ColorInterface $background
     */
    public function __construct(ImagineInterface $imagine, $angle, ColorInterface $background = null)
    {
        parent::__construct($imagine, new Rotate($angle, $background));
    }
}
