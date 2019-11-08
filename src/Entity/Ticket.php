<?php

//TODO add customer id or name as foreign key (best name, een user table voor alle rollen )
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $publicComment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $privateComment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $assignedAgent;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="tickets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPublicComment(): ?string
    {
        return $this->publicComment;
    }

    public function setPublicComment(string $publicComment): self
    {
        $this->publicComment = $publicComment;

        return $this;
    }

    public function getPrivateComment(): ?string
    {
        return $this->privateComment;
    }

    public function setPrivateComment(?string $privateComment): self
    {
        $this->privateComment = $privateComment;

        return $this;
    }

    public function getAssignedAgent(): ?string
    {
        return $this->assignedAgent;
    }

    public function setAssignedAgent(?string $assignedAgent): self
    {
        $this->assignedAgent = $assignedAgent;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
