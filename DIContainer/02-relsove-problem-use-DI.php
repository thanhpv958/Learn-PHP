<?php

/**
 * Sử dụng DI đã giải quyết được vấn đề phụ thuộc giữa các class với nhau
 * => Nên:
 *  - Sau này có thể dễ dàng thay đổi class implementation
 *  Ví dụ: Không muốn dùng  SHA01Hasher mà dùng MD5Hasher chúng ta có thể dễ dàng inject
 *  instance vào trong class UserService vì constructor của class này đang type-hint Hasher
 *  nên có thể bind những class implement từ interface Hasher
 * 
 * - Dễ viết test, có thể mock dễ dàng
 * 
 * Problem:
 *  - Có thể thấy UserController(new UserService(new SHA01Hasher()));
 *  Với mỗi class chúng ta phải inject một instance của class dependency(phụ thuộc) vào class depend(bị phụ thuộc)
 *      UserService: dependency, UserController: depend
 *      SHA01Hasher: dependency, UserService: depend
 *  Tuy nhiên sẽ ra sao nếu class dependency lại cần thêm các class depend khác nữa...
 *  Sau này khi sửa class dependency(ví dụ như thêm class depend) thì việc maintain code sẽ hơi khổ :))
 * 
 * ==> Sử dụng DI Container để auto resolve các class dependency
 *  
 */

interface Hasher
{
    public function hash($stringHash);
}

class SHA01Hasher implements Hasher
{
    public function hash($stringHash)
    {
        return 'SHA01Hasher ' . $stringHash;
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
    protected $hasher;

    public function __construct(Hasher $hasher)
    {
        $this->hasher = $hasher;
    }

    public function register($dataUser)
    {
        $dataUser['password'] = $this->hasher->hash($dataUser['password']);

        var_dump($dataUser);

        return;
    }
}

class UserController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register($dataUser)
    {
        return $this->userService->register($dataUser);
    }
}

$dataUser = [
    'email' => 'abc@gmail.com',
    'password' => '123456',  
];

$user = new UserController(new UserService(new SHA01Hasher()));
$user->register($dataUser);
