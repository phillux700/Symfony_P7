<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ApiResource(
 *     attributes={"access_control"="is_granted('ROLE_CLIENT')"},
 *     collectionOperations=
 *     {
 *         "get"={"method"="GET", "access_control"="is_granted('ROLE_CLIENT')", "access_control_message"="Only admins can see all users", "swagger_context"={"summary"="Permet de récupérer l'ensemble des ressources Users"}, "groups"={"list"}, "normalization_context"={"groups"={"list"}}},
 *         "post"={"method"="POST", "access_control"="is_granted('ROLE_CLIENT')", "access_control_message"="Only admins can create users", "swagger_context"={"summary"="Permet d'ajouter une ressource Users"}, "groups"={"list"}, "normalization_context"={"groups"={"list"}}}
 *     },
 *
 *      itemOperations=
 *     {
 *          "get"={"method"="GET", "path"="users/{id}", "access_control"="is_granted('ROLE_CLIENT') or object == user", "access_control_message"="You can only see your own user", "swagger_context"={"summary"="Permet de récupérer une ressources Users grâce à son id"}, "groups"={"list"}, "normalization_context"={"groups"={"list"}}},
 *          "delete"={"method"="DELETE", "access_control"="is_granted('ROLE_CLIENT') and object != user", "access_control_message"="Only admins can delete users", "swagger_context"={"summary"="Permet de supprimer une ressource Users grâce à son id"}}
 *     },
 * )
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @Groups({"list"})
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"list"})
     * @Assert\NotBlank(message="Ce champ ne peut être vide")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"list"})
     * @Assert\NotBlank(message="Ce champ ne peut être vide")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"list"})
     * @Assert\NotBlank(message="Ce champ ne peut être vide")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"list"})
     * @Assert\NotBlank(message="Ce champ ne peut être vide")
     */
    private $lastName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}
