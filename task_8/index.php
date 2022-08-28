<?php

declare(strict_types=1);

class User
{
    private string $name = '';
    private int $age = -1;
    private string $email = '';

    public function __call(string $name, array $arguments): void
    {
        if(!method_exists($this, $name)){
            throw new Exception(message: 'Method does`t exist');
        }

        call_user_func_array([$this, $name], $arguments);
    }

    private function setName(string $name): void
    {
        $this->name = $name;
    }

    private function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getAll():array
    {
        return [
          $this->name,
          $this->age,
          $this->email
        ];
    }

}

try {
    $user = new User();
    $user->setName('John');
    $user->setAge(23);
    var_dump($user->getAll());
    $user->setEmail();
}catch (Exception $exception){
    echo $exception->getMessage().PHP_EOL;
}
