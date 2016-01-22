<?php
namespace RDM\Assetic\Filter\Advanced;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Advanced\RelativeResize;

/**
 * A relative resize filter
 */
class RelativeResizeFilter extends ImagineFilter
{

    /**
     * Constructs a RelativeResize filter with the given method and argument.
     *
     * @param ImagineInterface $imagine
     * @param string $method BoxInterface method
     * @param mixed $parameter Parameter for BoxInterface method
     */
    public function __construct(ImagineInterface $imagine, $method, $parameter)
    {
        parent::__construct($imagine, new RelativeResize($method, $parameter));
    }
}
