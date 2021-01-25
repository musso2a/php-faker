<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
class User
{
    protected $id;
    protected $created_at;
    protected $updated_at;
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $password;

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getCreatedAt()
    {
        if (!$this->created_at instanceof DateTime) {
            return new DateTime($this->created_at);
        }
        return $this->created_at;
    }

    public function setCreatedAt(DateTime $created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function setUpdatedAt(DateTime $updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getLastNAme()
    {
        return $this->last_name;
    }
    public function setLastNAme(string $last_name)
    {
        $this->$last_name = $last_name;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(int $email)
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(int $password)
    {
        $this->password = $password;
        return $this;
    }
}