<?php
namespace RDM\Assetic\Filter\Advanced;

use RDM\Assetic\Filter\ImagineFilter;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Advanced\Grayscale;

/**
 * The Grayscale filter calculates the gray-value based on RGB.
 */
class Grayscale extends ImagineFilter
{

    /**
     * Constructs the Grayscale filter
     *
     * @param ImagineInterface $imagine
     */
    public function __construct(ImagineInterface $imagine)
    {
        parent::__construct($imagine, new Grayscale());
    }
}
