<?php
namespace RDM\Assetic\Filter\Imagine\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Image\Fill\FillInterface;
use Imagine\Filter\Basic\Fill;

/**
 * A fill filter
 */
class FillFilter extends ImagineFilter
{

    /**
     * Constructs the Fill filter with given fill
     *
     * @param ImagineInterface $imagine
     * @param FillInterface $fill
     */
    public function __construct(ImagineInterface $imagine, FillInterface $fill)
    {
        parent::__construct($imagine, new Fill($fill));
    }
}
