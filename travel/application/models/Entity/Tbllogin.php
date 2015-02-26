<?php


namespace Entity;
//use Doctrine\Mapping as ORM;

/**
 * Tbllogin
 *
 * @Table(name="tbllogin")
 * @Entity
 */
class Tbllogin
{
    /**
     * @var integer $codusuario
     *
     * @Column(name="codUsuario", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $codusuario;

    /**
     * @var string $user
     *
     * @Column(name="user", type="string", length=20, nullable=false)
     */
    private $user;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=20, nullable=false)
     */
    private $password;

    /**
     * @var string $nombreusuario
     *
     * @Column(name="nombreUsuario", type="string", length=60, nullable=false)
     */
    private $nombreusuario;

    /**
     * @var integer $codperfil
     *
     * @Column(name="codPerfil", type="integer", nullable=false)
     */
    private $codperfil;

    function getCodusuario() {
        return $this->codusuario;
    }

    function getUser() {
        return $this->user;
    }

    function getPassword() {
        return $this->password;
    }

    function getNombreusuario() {
        return $this->nombreusuario;
    }

    function getCodperfil() {
        return $this->codperfil;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNombreusuario($nombreusuario) {
        $this->nombreusuario = $nombreusuario;
    }

    function setCodperfil($codperfil) {
        $this->codperfil = $codperfil;
    }



}