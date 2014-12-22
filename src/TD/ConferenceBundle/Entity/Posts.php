<?php

namespace TD\ConferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table("posts")
 * @ORM\Entity(repositoryClass="TD\ConferenceBundle\Entity\PostsRepository")
 */
class Posts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="TD\ConferenceBundle\Entity\Tags", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $tags;
    
    /**
     * @ORM\OneToOne(targetEntity="TD\ConferenceBundle\Entity\Image", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="extrait", type="string", length=255)
     */
    private $extrait;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;


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
     * Set titre
     *
     * @param string $titre
     * @return Posts
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set extrait
     *
     * @param string $extrait
     * @return Posts
     */
    public function setExtrait($extrait)
    {
        $this->extrait = $extrait;

        return $this;
    }

    /**
     * Get extrait
     *
     * @return string 
     */
    public function getExtrait()
    {
        return $this->extrait;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Posts
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Posts
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Posts
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tags
     *
     * @param \TD\ConferenceBundle\Entity\Tags $tags
     * @return Posts
     */
    public function addTag(\TD\ConferenceBundle\Entity\Tags $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \TD\ConferenceBundle\Entity\Tags $tags
     */
    public function removeTag(\TD\ConferenceBundle\Entity\Tags $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set image
     *
     * @param \TD\ConfrenceBundle\Entity\Image $image
     * @return Posts
     */
    //public function setImage(\TD\ConfrenceBundle\Entity\Image $image)
    public function setImage(Image $image = null)
    {
        $this->image = $image;

       // return $this;
    }

    /**
     * Get image
     *
     * @return \TD\ConfrenceBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set tags
     *
     * @param \TD\ConferenceBundle\Entity\Tags $tags
     * @return Posts
     */
    public function setTags(\TD\ConferenceBundle\Entity\Tags $tags)
    {
        $this->tags = $tags;

        return $this;
    }
}
