<?php
namespace RDM\Assetic\Filter\Advanced;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Advanced\OnPixelBased;

/**
 * A pixel based filter 
 */
class OnPixelBasedFilter extends ImagineFilter
{

    /**
     * Constructs the OnPixelBased filter
     * 
     * @param ImagineInterface $imagine
     * @param callable $callback This callable is called with the image (\Imagine\Image\ImageInterface)
     *        and the current point (\Imagine\Image\Point)
     */
    public function __construct(ImagineInterface $imagine, $callback)
    {
        parent::__construct($imagine, new OnPixelBased($callback));
    }
}
