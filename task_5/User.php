<?php

/*
 * get rid of setters
 * change constuctor
 * change throwing exception from within setter to getUserData()
 * */

class User
{
    // id variable has mixed datatype for training in throwing exceptions
    public function __construct(
        public mixed  $id,
        public string $password,
        public string $email
    )
    {
        if(!is_int($this->id)){
            throw new Exception(message: __FILE__.' "Id is not a number" on line '.__LINE__);
        }

        if(8 < strlen($this->password)){
            throw new Exception(message: __FILE__.' "Max password length is 8 symbols" on line '.__LINE__);
        }
    }

    public function getUserData(): array
    {
        return [
            'id' => $this->id,
            'email' => $this->email
        ];
    }
}

try {
    $testUser = new User(2, 'secret', 'example@gmail.com');

    print_r($testUser->getUserData());

} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}