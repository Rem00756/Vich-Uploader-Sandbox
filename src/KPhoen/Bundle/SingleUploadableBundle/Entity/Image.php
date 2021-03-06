<?php

namespace KPhoen\Bundle\SingleUploadableBundle\Entity;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Image
 */
class Image
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $file_name;

    /**
     * @var File $image
     */
    protected $image;


    public function __toString()
    {
        return $this->title ? $this->title : '';
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Image
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set file_name
     *
     * @param string $fileName
     * @return Image
     */
    public function setFileName($fileName)
    {
        $this->file_name = $fileName;

        return $this;
    }

    /**
     * Get file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    public function setImage(File $image)
    {
        $this->image = $image;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }
}
