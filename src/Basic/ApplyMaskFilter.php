<?php
namespace RDM\Assetic\Filter\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Image\ImageInterface;
use Imagine\Filter\Basic\ApplyMask;

/**
 * An apply mask filter
 */
class ApplyMaskFilter extends ImagineFilter
{

    /**
     * Constructs an ApplyMask filter with a given mask
     * 
     * @param ImagineInterface $imagine
     * @param ImageInterface $mask
     */
    public function __construct(ImagineInterface $imagine, ImageInterface $mask)
    {
        parent::__construct($imagine, new ApplyMask($mask));
    }
}
