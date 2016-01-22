<?php
namespace RDM\Assetic\Filter\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Basic\Copy;

/**
 * A copy filter
 */
class CopyFilter extends ImagineFilter
{

    /**
     * Constructs the Copy filter
     *
     * @param ImagineInterface $imagine
     */
    public function __construct(ImagineInterface $imagine)
    {
        parent::__construct($imagine, new Copy());
    }
}
