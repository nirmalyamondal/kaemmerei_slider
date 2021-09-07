<?php
namespace AshokaTree\KaemmereiSlider\Domain\Model;

/***
 *
 * This file is part of the "Kaemmerei Slider" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Nirmalya Mondal <nirmalya.mondal@gmail.com>, https://ashokatree.net
 *
 ***/
/**
 * Record
 */
class Record extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * tablabel
     * 
     * @var string
     */
    protected $tablabel = '';

    /**
     * toptitle
     * 
     * @var string
     */
    protected $toptitle = '';

    /**
     * topdescription
     * 
     * @var string
     */
    protected $topdescription = '';

    /**
     * topimage
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $topimage = null;

    /**
     * middletitle
     * 
     * @var string
     */
    protected $middletitle = '';

    /**
     * middledescription
     * 
     * @var string
     */
    protected $middledescription = '';

    /**
     * middleimage
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $middleimage = null;

    /**
     * lefttoplabel
     * 
     * @var string
     */
    protected $lefttoplabel = '';

    /**
     * lefttopimages
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $lefttopimages = null;

    /**
     * leftbottomlabel
     * 
     * @var string
     */
    protected $leftbottomlabel = '';

    /**
     * leftbottomimages
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $leftbottomimages = null;
                
    /**
     * bottomimage
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $bottomimage = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->lefttopimages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->leftbottomimages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the tablabel
     * 
     * @return string $tablabel
     */
    public function getTablabel()
    {
        return $this->tablabel;
    }

    /**
     * Sets the tablabel
     * 
     * @param string $tablabel
     * @return void
     */
    public function setTablabel($tablabel)
    {
        $this->tablabel = $tablabel;
    }

    /**
     * Get toptitle
     *
     * @return string
     */
    public function getToptitle()
    {
        return $this->toptitle;
    }

    /**
     * Set toptitle
     *
     * @param string $toptitle toptitle
     */
    public function setToptitle($toptitle)
    {
        $this->toptitle = $toptitle;
    }

    /**
     * Returns the topdescription
     * 
     * @return string $topdescription
     */
    public function getTopdescription()
    {
        return $this->topdescription;
    }

    /**
     * Sets the topdescription
     * 
     * @param string $topdescription
     * @return void
     */
    public function setTopdescription($topdescription)
    {
        $this->topdescription = $topdescription;
    }

    /**
     * Returns the topimage
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $topimage
     */
    public function getTopimage()
    {
        return $this->topimage;
    }

    /**
     * Sets the topimage
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $topimage
     * @return void
     */
    public function setTopimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $topimage)
    {
        $this->topimage = $topimage;
    }  

    /**
     * Returns the middletitle
     * 
     * @return string $middletitle
     */
    public function getMiddletitle()
    {
        return $this->middletitle;
    }

    /**
     * Sets the middletitle
     * 
     * @param string $middletitle
     * @return void
     */
    public function setMiddletitle($middletitle)
    {
        $this->middletitle = $middletitle;
    }

    /**
     * Returns the middledescription
     * 
     * @return string $middledescription
     */
    public function getMiddledescription()
    {
        return $this->middledescription;
    }

    /**
     * Sets the middledescription
     * 
     * @param string $middledescription
     * @return void
     */
    public function setMiddledescription($middledescription)
    {
        $this->middledescription = $middledescription;
    } 

    /**
     * Returns the middleimage
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $middleimage
     */
    public function getMiddleimage()
    {
        return $this->middleimage;
    }

    /**
     * Sets the middleimage
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $middleimage
     * @return void
     */
    public function setMiddleimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $middleimage)
    {
        $this->middleimage = $middleimage;
    }   

    /**
     * Returns the lefttoplabel
     * 
     * @return string $lefttoplabel
     */
    public function getLefttoplabel()
    {
        return $this->lefttoplabel;
    }

    /**
     * Sets the lefttoplabel
     * 
     * @param string $lefttoplabel
     * @return void
     */
    public function setLefttoplabel($lefttoplabel)
    {
        $this->lefttoplabel = $lefttoplabel;
    } 

    /**
     * Returns the lefttopimages
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getLefttopimages()
    {
        return $this->lefttopimages;
    }

    /**
     * Sets the lefttopimages
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AshokaTree\KaemmereiSlider\Domain\Model\FileReference> $lefttopimages
     * @return void
     */
    public function setLefttopimages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lefttopimages)
    {
        $this->lefttopimages = $lefttopimages;
    }

    /**
     * Returns the leftbottomlabel
     * 
     * @return string $leftbottomlabel
     */
    public function getLeftbottomlabel()
    {
        return $this->leftbottomlabel;
    }

    /**
     * Sets the leftbottomlabel
     * 
     * @param string $leftbottomlabel
     * @return void
     */
    public function setLeftbottomlabel($leftbottomlabel)
    {
        $this->leftbottomlabel = $leftbottomlabel;
    } 

    /**
     * Returns the leftbottomimages
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getLeftbottomimages()
    {
        return $this->leftbottomimages;
    }

    /**
     * Sets the leftbottomimages
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AshokaTree\KaemmereiSlider\Domain\Model\FileReference> $leftbottomimages
     * @return void
     */
    public function setLeftbottomimages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $leftbottomimages)
    {
        $this->leftbottomimages = $leftbottomimages;
    }

    /**
     * Returns the bottomimage
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $bottomimage
     */
    public function getBottomimage()
    {
        return $this->bottomimage;
    }

    /**
     * Sets the bottomimage
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $bottomimage
     * @return void
     */
    public function setBottomimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $bottomimage)
    {
        $this->bottomimage = $bottomimage;
    } 
}
