<?php
namespace RDM\Assetic\Filter\Imagine\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Image\BoxInterface;
use Imagine\Image\PointInterface;
use Imagine\Filter\Basic\Crop;

/**
 * A crop filter
 */
class CropFilter extends ImagineFilter
{

    /**
     * Constructs a Crop filter with given x, y, coordinates and crop width and
     * height values
     *
     * @param ImagineInterface $imagine
     * @param PointInterface $start
     * @param BoxInterface $size
     */
    public function __construct(ImagineInterface $imagine, PointInterface $start, BoxInterface $size)
    {
        parent::__construct($imagine, new Crop($start, $size));
    }
}
