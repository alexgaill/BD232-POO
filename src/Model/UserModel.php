<?php
namespace App\Model;

use App\Entity\User;
use Core\Model\ModelCriteriaInterface;
use Core\Model\ModelInterface;

final class UserModel implements ModelInterface, ModelCriteriaInterface {

    public function findAll(): array
    {
        return [];
    }

    public function find(int $id): object
    {
        return new User;
    }

    public function findBy(array $criteria = []): array
    {
        return [];
    }

    public function findOneBy(array $criteria = []): object
    {
        return new User;
    }
}