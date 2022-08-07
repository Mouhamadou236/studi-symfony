<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $commentary;

    #[ORM\Column(type: 'integer')]
    private $note;

    #[ORM\ManyToOne(targetEntity: Recipe::class, inversedBy: 'comments')]
    private $recipe;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'comments')]
    private $contibutors;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentary(): ?string
    {
        return $this->commentary;
    }

    public function setCommentary(string $commentary): self
    {
        $this->commentary = $commentary;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getRecipe(): ?Recipe
    {
        return $this->recipe;
    }

    public function setRecipe(?Recipe $recipe): self
    {
        $this->recipe = $recipe;

        return $this;
    }

    public function getContibutors(): ?User
    {
        return $this->contibutors;
    }

    public function setContibutors(?User $contibutors): self
    {
        $this->contibutors = $contibutors;

        return $this;
    }
}
