<?php

declare(strict_types=1);

class MethodNotExistsException extends Exception
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

class User
{
    private string $name = '';
    private int $age = -1;
    private string $email = '';

    public function __call(string $name, array $arguments): void
    {
        if(!method_exists($this, $name)){
            throw new MethodNotExistsException(message: 'Method does not exist');
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
}catch (MethodNotExistsException $exception){
    echo $exception->getMessage().PHP_EOL;
}
