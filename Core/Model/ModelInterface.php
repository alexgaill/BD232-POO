<?php
namespace Core\Model;

interface ModelInterface {

    public function findAll(): array;

    public function find(int $id): object;
}