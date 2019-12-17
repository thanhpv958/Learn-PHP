<?php

/**
 * - class Container làm nhiệm vụ bind và resolve dependencies
 * - sử dụng Reflection và recursion để get đến hết dependencies 
 */
class Container
{
    protected $instances = [];

    /**
     * @param $abstract
     * @param $concrete
     */
    public function bind($abstract, $concrete = NULL)
    {
        if (is_null($concrete)) {
            $concrete = $abstract;
        }
        $this->instances[$abstract] = $concrete;
    }

    /**
     * @param $abstract
     * @return bool
     */
    public function has($abstract)
    {
        return isset($this->instances[$abstract]);
    }

    /**
     * @param $abstract
     * @return mixed|object
     * @throws Exception
     */
    public function make($abstract, $parameters = [])
    {
        if (!$this->has($abstract)) {
            $this->bind($abstract);
        }

        return $this->resolve($this->instances[$abstract], $parameters);
    }

    /**
     * @param $concrete
     * @return mixed|object
     * @throws ReflectionException
     */
    public function resolve($concrete, $parameters)
    {
        if ($concrete instanceof Closure) {
            return $concrete($this, $parameters);
        }

        $reflector = new ReflectionClass($concrete);

        if (!$reflector->isInstantiable()) {
            throw new Exception("Class {$concrete} is not instantiable");
        }

        $constructor = $reflector->getConstructor();

        if (is_null($constructor)) {
            return $reflector->newInstance();
		}

        $parameters = $constructor->getParameters();
        $dependencies = $this->getDependencies($parameters);

        return $reflector->newInstanceArgs($dependencies);
    }

    /**
     * @param $parameters
     * @return array
     * @throws Exception
     */
    protected function getDependencies($parameters)
    {
        $dependencies = [];

        foreach ($parameters as $parameter) {
            $dependency = $parameter->getClass();

            if (is_null($dependency)) {
                if ($parameter->isDefaultValueAvailable()) {
                    $dependencies[] = $parameter->getDefaultValue();
                } else {
                    throw new Exception("Can not resolve dependency {$parameter->name}");
                }
            } else {
                $dependencies[] = $this->make($dependency->name);
            }
        }

        return $dependencies;
    }
}

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

$container = new Container();

// Bind Interface
$container->bind(Hasher::class, SHA01Hasher::class);
$userController = $container->make(UserController::class);
$userController->register($dataUser);

// Bind Closure
// $container->bind(Hasher::class, function($container, $parameters) {
//     return $parameters['id'] . ' ' . $parameters['name'];
// });
// $userController = $container->make(Hasher::class, ['id' => 2, 'name' => 'thanh']);
