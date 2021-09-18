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
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
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
     * lefttopimagefirst
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $lefttopimagefirst = null;

    /**
     * lefttopimagesecond
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $lefttopimagesecond = null;

    /**
     * lefttopimagethird
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $lefttopimagethird = null;

    /**
     * leftbottomlabel
     * 
     * @var string
     */
    protected $leftbottomlabel = '';

    /**
     * leftbottomimagefirst
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $leftbottomimagefirst = null;

    /**
     * leftbottomimagesecond
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $leftbottomimagesecond = null;

    /**
     * leftbottomimagethird
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $leftbottomimagethird = null;

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
        $this->topimage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->lefttopimagefirst = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->lefttopimagesecond = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->lefttopimagethird = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->leftbottomimagefirst = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->leftbottomimagesecond = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->leftbottomimagethird = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage $topimage
     */
    public function getTopimage()
    {
        return $this->topimage;
    }

    /**
     * Sets the topimage
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AshokaTree\KaemmereiSlider\Domain\Model\FileReference> $topimage
     * @return void
     */
    public function setTopimage(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $topimage)
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
     * Returns the lefttopimagefirst
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getLefttopimagefirst()
    {
        return $this->lefttopimagefirst;
    }

    /**
     * Sets the lefttopimagefirst
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AshokaTree\KaemmereiSlider\Domain\Model\FileReference> $lefttopimagefirst
     * @return void
     */
    public function setLefttopimagefirst(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lefttopimagefirst)
    {
        $this->lefttopimagefirst = $lefttopimagefirst;
    }

    /**
     * Returns the lefttopimagesecond
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getLefttopimagesecond()
    {
        return $this->lefttopimagesecond;
    }

    /**
     * Sets the lefttopimagesecond
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AshokaTree\KaemmereiSlider\Domain\Model\FileReference> $lefttopimagesecond
     * @return void
     */
    public function setLefttopimagesecond(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lefttopimagesecond)
    {
        $this->lefttopimagesecond = $lefttopimagesecond;
    }

    /**
     * Returns the lefttopimagethird
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getLefttopimagethird()
    {
        return $this->lefttopimagethird;
    }

    /**
     * Sets the lefttopimagethird
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AshokaTree\KaemmereiSlider\Domain\Model\FileReference> $lefttopimagethird
     * @return void
     */
    public function setLefttopimagethird(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lefttopimagethird)
    {
        $this->lefttopimagethird = $lefttopimagethird;
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
     * Returns the leftbottomimagefirst
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getLeftbottomimagefirst()
    {
        return $this->leftbottomimagefirst;
    }

    /**
     * Sets the leftbottomimagefirst
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AshokaTree\KaemmereiSlider\Domain\Model\FileReference> $leftbottomimagefirst
     * @return void
     */
    public function setLeftbottomimagefirst(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $leftbottomimagefirst)
    {
        $this->leftbottomimagefirst = $leftbottomimagefirst;
    }

    /**
     * Returns the leftbottomimagesecond
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getLeftbottomimagesecond()
    {
        return $this->leftbottomimagesecond;
    }

    /**
     * Sets the leftbottomimagesecond
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AshokaTree\KaemmereiSlider\Domain\Model\FileReference> $leftbottomimagesecond
     * @return void
     */
    public function setLeftbottomimagesecond(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $leftbottomimagesecond)
    {
        $this->leftbottomimagesecond = $leftbottomimagesecond;
    }

    /**
     * Returns the leftbottomimagethird
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getLeftbottomimagethird()
    {
        return $this->leftbottomimagethird;
    }

    /**
     * Sets the leftbottomimagethird
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AshokaTree\KaemmereiSlider\Domain\Model\FileReference> $leftbottomimagethird
     * @return void
     */
    public function setLeftbottomimagethird(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $leftbottomimagethird)
    {
        $this->leftbottomimagethird = $leftbottomimagethird;
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
