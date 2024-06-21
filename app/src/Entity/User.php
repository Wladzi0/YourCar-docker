<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, \Stringable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private string $email;

    /**
     * @var string[]
     */
    #[ORM\Column(type: Types::JSON)]
    private array $roles;

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private string $password;

    #[Assert\Length(max: 4096)]
    private string $plainPassword;

    #[ORM\Column(length: 255)]
    private string $firstName;

    #[ORM\Column(length: 255)]
    private string $lastName;

    #[ORM\Column(length: 255)]
    private ?string $preferLanguage = null;

    #[ORM\Column]
    private bool $isVerified = false;

    /**
     * @var Collection<int, Fault>
     */
    #[ORM\OneToMany(targetEntity: Fault::class, mappedBy: 'user')]
    #[ORM\JoinColumn]
    private Collection $faults;

    /**
     * @var Collection<int, Comment>
     */
    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: 'user')]
    private Collection $comments;

    /**
     * @var Collection<int, Favourite>
     */
    #[ORM\OneToMany(targetEntity: Favourite::class, mappedBy: 'user')]
    private Collection $favourites;

    /**
     * @var Collection<int, Scale>
     */
    #[ORM\OneToMany(targetEntity: Scale::class, mappedBy: 'user')]
    private Collection $scales;

    /**
     * @var Collection<int, Rating>
     */
    #[ORM\OneToMany(targetEntity: Rating::class, mappedBy: 'user')]
    private Collection $ratings;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $carType = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $tuning = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $fuelConsumption = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $googleId = null;

    public function __construct()
    {
        $this->roles = ['ROLE_USER'];
        $this->faults = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->favourites = new ArrayCollection();
        $this->scales = new ArrayCollection();
        $this->ratings = new ArrayCollection();
    }

    public function __toString(): string
    {
        return sprintf('%s %s (#%d)', $this->firstName, $this->lastName, $this->id);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return $this->firstName;
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

    /**
     * @param string[] $roles
     */
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getPlainPassword(): string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(string $plainPassword): void
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

    //FIXME
    public function eraseCredentials(): void
    {
        /** @phpstan-ignore-next-line */
        $this->plainPassword = null;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getPreferLanguage(): ?string
    {
        return $this->preferLanguage;
    }

    public function setPreferLanguage(string $preferLanguage): void
    {
        $this->preferLanguage = $preferLanguage;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): void
    {
        $this->isVerified = $isVerified;
    }

    public function getFaults(): Collection
    {
        return $this->faults;
    }

    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function getFavourites(): Collection
    {
        return $this->favourites;
    }

    public function getScales(): Collection
    {
        return $this->scales;
    }

    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function getCarType(): ?string
    {
        return $this->carType;
    }

    public function setCarType(?string $carType): void
    {
        $this->carType = $carType;
    }

    public function getTuning(): ?string
    {
        return $this->tuning;
    }

    public function setTuning(?string $tuning): void
    {
        $this->tuning = $tuning;
    }

    public function getFuelConsumption(): ?string
    {
        return $this->fuelConsumption;
    }

    public function setFuelConsumption(?string $fuelConsumption): void
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    public function getGoogleId(): ?string
    {
        return $this->googleId;
    }

    public function setGoogleId(?string $googleId): void
    {
        $this->googleId = $googleId;
    }

    public function getUserIdentifier(): string
    {
       return $this->firstName;
    }
}
