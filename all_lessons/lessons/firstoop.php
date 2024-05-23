<?php
//public
//private
//protected
namespace lessons;
class User
{
    private string $name;

    private string $email;

    private int $age;

    public function __construct(string $name, string $email, int $age)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setAge($age);
    }

    public function showName(): void
    {
        echo $this->getName() . PHP_EOL;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if (strlen($name) < 2) {
            return;
        }
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if ($age < 1) {
            return;
        }
        $this->age = $age;
    }


    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    private function checkEmail(string $email): bool
    {
        if (strlen($email) < 8) {
            return false;
        }

        return true;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function __destruct()
    {
        echo "destruct!" . PHP_EOL;
    }
}


$user = new \hillel_01_04\lessons\User('Jim', 'jim@gmail.com', 25);

//
//$user2 = new User();
//$user2->name = 'Kate';
//$user2->email = 'kate@gmail.com';
//$user2->age = 30;
//$user2->showName();
//
//$user3 = new User();
//$user3->email = 'test@gmail.com';

//var_dump(isset($user3->name));