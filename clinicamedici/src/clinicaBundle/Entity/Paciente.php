<?php

namespace clinicaBundle\Entity;
# use Symfony\Component\Security\Core\User\UserInterface;
/**
 * Paciente
 */
class Paciente # implements UserInterface
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $dni;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var integer
     */
    private $telefono;

    /**
     * @var \DateTime
     */
    private $fechanacimiento;

    /**
     * @var \DateTime
     */
    private $fechaalta;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var string
     */
    private $gsangui;

    /**
     * @var float
     */
    private $pesokg;

    /**
     * @var float
     */
    private $tallam;

    /**
     * @var string
     */
    private $informemed;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \clinicaBundle\Entity\Empleado
     */
    private $medico;

    
    
    
    
    
    
    
    
    
   
    
    
    
    
     // esto se ha añadido
    
   // AUTH
	
	public function getUsername() {
		return $this->email;
	}
	
	public function getSalt() {
		return null;
	}
	
	public function getRoles() {
		return array($this->getRole());
	}

	public function eraseCredentials() {
		
	}

	// END AUTH
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Paciente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Paciente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Paciente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Paciente
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Paciente
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Paciente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Paciente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     *
     * @return Paciente
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set fechaalta
     *
     * @param \DateTime $fechaalta
     *
     * @return Paciente
     */
    public function setFechaalta($fechaalta)
    {
        $this->fechaalta = $fechaalta;

        return $this;
    }

    /**
     * Get fechaalta
     *
     * @return \DateTime
     */
    public function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Paciente
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set gsangui
     *
     * @param string $gsangui
     *
     * @return Paciente
     */
    public function setGsangui($gsangui)
    {
        $this->gsangui = $gsangui;

        return $this;
    }

    /**
     * Get gsangui
     *
     * @return string
     */
    public function getGsangui()
    {
        return $this->gsangui;
    }

    /**
     * Set pesokg
     *
     * @param float $pesokg
     *
     * @return Paciente
     */
    public function setPesokg($pesokg)
    {
        $this->pesokg = $pesokg;

        return $this;
    }

    /**
     * Get pesokg
     *
     * @return float
     */
    public function getPesokg()
    {
        return $this->pesokg;
    }

    /**
     * Set tallam
     *
     * @param float $tallam
     *
     * @return Paciente
     */
    public function setTallam($tallam)
    {
        $this->tallam = $tallam;

        return $this;
    }

    /**
     * Get tallam
     *
     * @return float
     */
    public function getTallam()
    {
        return $this->tallam;
    }

    /**
     * Set informemed
     *
     * @param string $informemed
     *
     * @return Paciente
     */
    public function setInformemed($informemed)
    {
        $this->informemed = $informemed;

        return $this;
    }

    /**
     * Get informemed
     *
     * @return string
     */
    public function getInformemed()
    {
        return $this->informemed;
    }

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
     * Set medico
     *
     * @param \clinicaBundle\Entity\Empleado $medico
     *
     * @return Paciente
     */
    public function setMedico(\clinicaBundle\Entity\Empleado $medico = null)
    {
        $this->medico = $medico;

        return $this;
    }

    /**
     * Get medico
     *
     * @return \clinicaBundle\Entity\Empleado
     */
    public function getMedico()
    {
        return $this->medico;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

