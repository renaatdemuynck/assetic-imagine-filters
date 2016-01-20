<?php
namespace RDM\Assetic\Filter;

use Assetic\Filter\FilterInterface as AsseticFilterInterface;
use Assetic\Asset\AssetInterface;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\FilterInterface as ImagineFilterInterface;

/**
 * Abstract filter
 */
class AbstractImagineFilter implements AsseticFilterInterface
{

    protected $imagine;

    protected $filter;

    /**
     * Constructor
     *
     * @param ImagineInterface $imagine
     */
    public function __construct(ImagineInterface $imagine, ImagineFilterInterface $filter)
    {
        $this->imagine = $imagine;
        $this->filter = $filter;
    }

    public function filterLoad(AssetInterface $asset)
    {}

    public function filterDump(AssetInterface $asset)
    {
        $image = $this->imagine->load($asset->getContent());
        $asset->setContent($this->filter->apply($image));
    }
}
