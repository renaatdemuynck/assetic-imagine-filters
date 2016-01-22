<?php
namespace RDM\Assetic\Filter\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Basic\Save;

/**
 * A save filter
 */
class SaveFilter extends ImagineFilter
{

    /**
     * Constructs Save filter with given path and options
     *
     * @param string $path
     * @param array $options
     */
    public function __construct(ImagineInterface $imagine, $path = null, array $options = array())
    {
        parent::__construct($imagine, new Save($path, $options));
    }
}
