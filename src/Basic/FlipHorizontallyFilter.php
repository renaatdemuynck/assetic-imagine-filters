<?php
namespace RDM\Assetic\Filter\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Basic\FlipHorizontally;

/**
 * A horizontal flip filter
 */
class FlipHorizontallyFilter extends ImagineFilter
{

    /**
     * Constructs the FlipHorizontally filter
     *
     * @param ImagineInterface $imagine
     */
    public function __construct(ImagineInterface $imagine)
    {
        parent::__construct($imagine, new FlipHorizontally());
    }
}
