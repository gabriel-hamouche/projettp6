<?php

namespace App\Entity;

use App\Enum\ExperienceEnum;
use App\Enum\LangagesEnum;
use App\Repository\DeveloppeurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DeveloppeurRepository::class)]
class Developpeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column(type: 'string', enumType: LangagesEnum::class, nullable: true)]
        private ?LangagesEnum $langage = null;

    #[ORM\Column(enumType: ExperienceEnum::class, nullable: true)]
    private ?ExperienceEnum $experience = null;

    #[ORM\Column]
    private ?float $salaire = null;

    #[ORM\Column(length: 512, nullable: true)]
    private ?string $biographie = null;

    #[ORM\Column(length: 512, nullable: true)]
    private ?string $avatar = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getLangage(): ?LangagesEnum
    {
        return $this->langage;
    }

    public function setLangage(LangagesEnum $langage): static
    {
        $this->langage = $langage;

        return $this;
    }

    public function getExperience(): ?ExperienceEnum
    {
        return $this->experience;
    }

    public function setExperience(ExperienceEnum $experience): static
    {
        $this->experience = $experience;

        return $this;
    }

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(float $salaire): static
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getBiographie(): ?string
    {
        return $this->biographie;
    }

    public function setBiographie(?string $biographie): static
    {
        $this->biographie = $biographie;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): static
    {
        $this->avatar = $avatar;

        return $this;
    }
}
