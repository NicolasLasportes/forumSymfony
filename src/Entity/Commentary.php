<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentaryRepository")
 */
class Commentary
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $commentary_content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Discussion", inversedBy="commentaries")
     */
    private $fk_discussion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commentary", inversedBy="commentaries")
     */
    private $fk_commentary;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commentary", mappedBy="fk_commentary")
     */
    private $commentaries;

    public function __construct()
    {
        $this->commentaries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentaryContent(): ?string
    {
        return $this->commentary_content;
    }

    public function setCommentaryContent(string $commentary_content): self
    {
        $this->commentary_content = $commentary_content;

        return $this;
    }

    public function getFkDiscussion(): ?Discussion
    {
        return $this->fk_discussion;
    }

    public function setFkDiscussion(?Discussion $fk_discussion): self
    {
        $this->fk_discussion = $fk_discussion;

        return $this;
    }

    public function getFkCommentary(): ?self
    {
        return $this->fk_commentary;
    }

    public function setFkCommentary(?self $fk_commentary): self
    {
        $this->fk_commentary = $fk_commentary;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getCommentaries(): Collection
    {
        return $this->commentaries;
    }

    public function addCommentary(self $commentary): self
    {
        if (!$this->commentaries->contains($commentary)) {
            $this->commentaries[] = $commentary;
            $commentary->setFkCommentary($this);
        }

        return $this;
    }

    public function removeCommentary(self $commentary): self
    {
        if ($this->commentaries->contains($commentary)) {
            $this->commentaries->removeElement($commentary);
            // set the owning side to null (unless already changed)
            if ($commentary->getFkCommentary() === $this) {
                $commentary->setFkCommentary(null);
            }
        }

        return $this;
    }
}
