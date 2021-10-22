<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @Assert\Length(max = 4096)
     */
    private $plainPassword;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $preferLanguage;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\OneToMany(targetEntity=Fault::class, mappedBy="user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $faults;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="user")
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity=Favourite::class, mappedBy="user")
     */
    private $favourites;

    /**
     * @ORM\OneToMany(targetEntity=Scale::class, mappedBy="user")
     */
    private $scales;

    /**
     * @ORM\OneToMany(targetEntity=Rating::class, mappedBy="user")
     */
    private $ratings;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $carType;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $tuning;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $fuelConsumption;



    public function __construct()
    {
        $this->roles=['ROLE_USER'];
        $this->faults = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->favourites = new ArrayCollection();
        $this->scales = new ArrayCollection();
        $this->ratings = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->firstName;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword): void
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    public function eraseCredentials()
    {
        $this->plainPassword = null;
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

    public function getPreferLanguage(): ?string
    {
        return $this->preferLanguage;
    }

    public function setPreferLanguage(string $preferLanguage): self
    {
        $this->preferLanguage = $preferLanguage;

        return $this;
    }

    public function __toString(): string
    {
        return $this->firstName.' '.$this->lastName.' (#'.$this->id. ')' ;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * @return Collection|Fault[]
     */
    public function getFaults(): Collection
    {
        return $this->faults;
    }

    public function addFault(Fault $fault): self
    {
        if (!$this->faults->contains($fault)) {
            $this->faults[] = $fault;
            $fault->setUser($this);
        }

        return $this;
    }

    public function removeFault(Fault $fault): self
    {
        if ($this->faults->removeElement($fault)) {
            // set the owning side to null (unless already changed)
            if ($fault->getUser() === $this) {
                $fault->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setUser($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getUser() === $this) {
                $comment->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Favourite[]
     */
    public function getFavourites(): Collection
    {
        return $this->favourites;
    }

    public function addFavourite(Favourite $favourite): self
    {
        if (!$this->favourites->contains($favourite)) {
            $this->favourites[] = $favourite;
            $favourite->setUser($this);
        }

        return $this;
    }

    public function removeFavourite(Favourite $favourite): self
    {
        if ($this->favourites->removeElement($favourite)) {
            // set the owning side to null (unless already changed)
            if ($favourite->getUser() === $this) {
                $favourite->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Scale[]
     */
    public function getScales(): Collection
    {
        return $this->scales;
    }

    public function addScale(Scale $scale): self
    {
        if (!$this->scales->contains($scale)) {
            $this->scales[] = $scale;
            $scale->setUser($this);
        }

        return $this;
    }

    public function removeScale(Scale $scale): self
    {
        if ($this->scales->removeElement($scale)) {
            // set the owning side to null (unless already changed)
            if ($scale->getUser() === $this) {
                $scale->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Rating[]
     */
    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function addRating(Rating $rating): self
    {
        if (!$this->ratings->contains($rating)) {
            $this->ratings[] = $rating;
            $rating->setUser($this);
        }

        return $this;
    }

    public function removeRating(Rating $rating): self
    {
        if ($this->ratings->removeElement($rating)) {
            // set the owning side to null (unless already changed)
            if ($rating->getUser() === $this) {
                $rating->setUser(null);
            }
        }

        return $this;
    }

    public function getCarType(): ?string
    {
        return $this->carType;
    }

    public function setCarType(?string $carType): self
    {
        $this->carType = $carType;

        return $this;
    }

    public function getTuning(): ?string
    {
        return $this->tuning;
    }

    public function setTuning(?string $tuning): self
    {
        $this->tuning = $tuning;

        return $this;
    }

    public function getFuelConsumption(): ?string
    {
        return $this->fuelConsumption;
    }

    public function setFuelConsumption(?string $fuelConsumption): self
    {
        $this->fuelConsumption = $fuelConsumption;

        return $this;
    }

    
}
