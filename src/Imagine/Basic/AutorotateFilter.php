<?php
namespace RDM\Assetic\Filter\Imagine\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Basic\Autorotate;

/**
 * An auto rotate filter
 */
class AutorotateFilter extends ImagineFilter
{

    /**
     * Constructs an Autorotate filter with a given color
     * 
     * @param ImagineInterface $imagine
     * @param string|array|ColorInterface $color A color
     */
    public function __construct(ImagineInterface $imagine, $color = '000000')
    {
        parent::__construct($imagine, new Autorotate($color));
    }
}
