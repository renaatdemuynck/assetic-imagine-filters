<?php
namespace RDM\Assetic\Filter\Imagine\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Basic\FlipVertically;

/**
 * A vertical flip filter
 */
class FlipVerticallyFilter extends ImagineFilter
{

    /**
     * Constructs the FlipVertically filter
     *
     * @param ImagineInterface $imagine
     */
    public function __construct(ImagineInterface $imagine)
    {
        parent::__construct($imagine, new FlipVertically());
    }
}
