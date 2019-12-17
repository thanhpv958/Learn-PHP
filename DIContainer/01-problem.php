<?php

/**
 * Problem 1:
 *  - Class UserController luôn bị gắn chặt với class UserService
 *  (cụ thể trong method register)
 * 
 * - Nếu sau này ko dùng UserService mà dùng class khác ví dụ như UserService02
 *  thì ta sẽ phải đi tìm những nơi dùng UserService để replace thành UserService02
 * 
 * Problem 2:
 *  - Tương tự với class UserService sẽ bị gắn chặt với class SHA01Hasher
 *  (cụ thể trong method register)
 * 
 * - Nếu sau này ko dùng SHA01Hasher mà dùng class khác ví dụ như MD5Hasher
 *  thì ta sẽ phải đi tìm những nơi dùng SHA01Hasher để replace thành MD5Hasher
 * 
 * => Nên:
 *  - Không tuân theo nguyên lí SOLID
 *  - Code rất khó maintain
 *  - Rất khó test vì không thể Mock được
 * 
 * ==> Sử dụng DI để:
 *  - Tuân theo SOLID
 *  - Tránh các class phụ thuộc trực tiếp với nhau: class nào cần dependency nào thì
 *  ta sẽ inject nó thông qua constructor, setter...
 *  - Dễ dàng thay đổi implementation
 *  - Dễ viết test
 */

interface Hasher
{
    public function hash($stringHash);
}

class SHA01Hasher implements Hasher
{
    public function hash($stringHash)
    {
        return 'sha01 ' . $stringHash;
    }
}

class MD5Hasher implements Hasher
{
    public function hash($stringHash)
    {
        return 'MD5Hasher ' . $stringHash;
    }
}

class UserService
{
    public function register($dataUser)
    {
        $hash = new SHA01Hasher();
        $dataUser['password'] = $hash->hash($dataUser['password']);

        var_dump($dataUser);

        return;
    }
}

class UserController
{
    public function register($dataUser)
    {
        $userService = new UserService($dataUser);

        return $userService->register($dataUser);
    }
}

$dataUser = [
    'email' => 'abc@gmail.com',
    'password' => '123456',  
];

$user = new UserController();
$user->register($dataUser);
