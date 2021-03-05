<?php

namespace App\Entity;

use App\Repository\InfosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InfosRepository::class)
 */
class Infos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $Infos_secu;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $info_urgence;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Info_generale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $informations_gen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInfosSecu(): ?string
    {
        return $this->Infos_secu;
    }

    public function setInfosSecu(string $Infos_secu): self
    {
        $this->Infos_secu = $Infos_secu;

        return $this;
    }

    public function getInfoUrgence(): ?string
    {
        return $this->info_urgence;
    }

    public function setInfoUrgence(?string $info_urgence): self
    {
        $this->info_urgence = $info_urgence;

        return $this;
    }

    public function getInfoGenerale(): ?string
    {
        return $this->Info_generale;
    }

    public function setInfoGenerale(?string $Info_generale): self
    {
        $this->Info_generale = $Info_generale;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getInformationsGen(): ?string
    {
        return $this->informations_gen;
    }

    public function setInformationsGen(string $informations_gen): self
    {
        $this->informations_gen = $informations_gen;

        return $this;
    }
}
