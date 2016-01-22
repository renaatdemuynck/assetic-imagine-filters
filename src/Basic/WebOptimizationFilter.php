<?php
namespace RDM\Assetic\Filter\Basic;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Basic\WebOptimization;

/**
 * A filter to render web-optimized images
 */
class WebOptimizationFilter extends ImagineFilter
{

    /**
     * Constructs the WebOptimization filter with given options
     *
     * @param ImagineInterface $imagine
     * @param string $format
     * @param array $options
     */
    public function __construct(ImagineInterface $imagine, array $options = array())
    {
        parent::__construct($imagine, new WebOptimization(null, $options));
    }
}
