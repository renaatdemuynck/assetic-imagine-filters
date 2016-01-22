<?php
namespace RDM\Assetic\Filter\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Basic\Strip;

/**
 * A strip filter
 */
class StripFilter extends ImagineFilter
{

    /**
     * Constructs the Strip filter with given format and options
     *
     * @param ImagineInterface $imagine
     * @param string $format
     * @param array $options
     */
    public function __construct(ImagineInterface $imagine, $format, array $options = array())
    {
        parent::__construct($imagine, new Strip($format, $options));
    }
}
