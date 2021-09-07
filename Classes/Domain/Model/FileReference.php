<?php
namespace AshokaTree\KaemmereiSlider\Domain\Model;

/***
 *
 * This file is part of the "Kaemmerei Slider" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * A file reference object (File Abstraction Layer)
 */
class FileReference extends \TYPO3\CMS\Extbase\Domain\Model\FileReference
{

    /**
     * SortingForeign
     *
     * @var integer
     */
    protected $sortingForeign;

    /**
     * @return int
     */
    public function getSortingForeign ()
    {
        return $this->sortingForeign;
    }

    /**
     * @param int $sortingForeign
     */
    public function setSortingForeign ($sortingForeign)
    {
        $this->sortingForeign = $sortingForeign;
    }
      
}
