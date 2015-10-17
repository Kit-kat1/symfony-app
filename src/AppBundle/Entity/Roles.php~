<?php
namespace AppBundle\Entity;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\ORM\Mapping as ORM;
/**
 * Roles
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RolesRepository")
 * @ORM\Table(name="roles")
 */
class Roles
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $role;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Roles
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
