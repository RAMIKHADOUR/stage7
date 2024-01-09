<?php

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AnnonceRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AnnonceRepository::class)]
class Annonce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:100)]
    private ?string $titre = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:100)]
    private ?string $category = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:100)]
    private ?string $type = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:5)]
    private ?string $description = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    #[Assert\GreaterThan(10)]
    private ?float $surface = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?int $number_rooms = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?int $number_bathrooms = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?int $number_stages = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?int $numero_stage = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?int $number_parkings = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull()]
    private ?\DateTimeInterface $date_construire = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    #[Assert\GreaterThan(1)]
    private ?float $price = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
      #[Assert\File()]
    private ?string $media = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
$this->createdAt = new DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): static
    {
        $this->surface = $surface;

        return $this;
    }

    public function getNumberRooms(): ?int
    {
        return $this->number_rooms;
    }

    public function setNumberRooms(int $number_rooms): static
    {
        $this->number_rooms = $number_rooms;

        return $this;
    }

    public function getNumberBathrooms(): ?int
    {
        return $this->number_bathrooms;
    }

    public function setNumberBathrooms(int $number_bathrooms): static
    {
        $this->number_bathrooms = $number_bathrooms;

        return $this;
    }

    public function getNumberStages(): ?int
    {
        return $this->number_stages;
    }

    public function setNumberStages(int $number_stages): static
    {
        $this->number_stages = $number_stages;

        return $this;
    }

    public function getNumeroStage(): ?int
    {
        return $this->numero_stage;
    }

    public function setNumeroStage(int $numero_stage): static
    {
        $this->numero_stage = $numero_stage;

        return $this;
    }

    public function getNumberParkings(): ?int
    {
        return $this->number_parkings;
    }

    public function setNumberParkings(int $number_parkings): static
    {
        $this->number_parkings = $number_parkings;

        return $this;
    }

    public function getDateConstruire(): ?\DateTimeInterface
    {
        return $this->date_construire;
    }

    public function setDateConstruire(\DateTimeInterface $date_construire): static
    {
        $this->date_construire = $date_construire;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setMedia(string $media): static
    {
        $this->media = $media;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
