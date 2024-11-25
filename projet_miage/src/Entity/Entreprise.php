<?php

namespace App\Entity;

use App\Enum\ExperienceEnum;
use App\Enum\LangagesEnum;
use App\Repository\EntrepriseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\Inflector\Language;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntrepriseRepository::class)]
class Entreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre_poste = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column(type: 'string', enumType: LangagesEnum::class, nullable: true)]
    private ?LangagesEnum $technologie = null;

    #[ORM\Column(enumType: ExperienceEnum::class, nullable: true)]
    private ?ExperienceEnum $experience= null;

    #[ORM\Column]
    private ?float $salaire = null;

    #[ORM\Column(length: 512)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrePoste(): ?string
    {
        return $this->titre_poste;
    }

    public function setTitrePoste(string $titre_poste): static
    {
        $this->titre_poste = $titre_poste;

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

    /**
     * @return LangagesEnum[]
     */
    public function getTechnologie(): ?LangagesEnum
    {
        return $this->technologie;
    }

    public function setTechnologie(LangagesEnum $technologie): static
    {
        $this->technologie = $technologie;

        return $this;
    }

    /**
     * @return ExperienceEnum[]
     */
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
