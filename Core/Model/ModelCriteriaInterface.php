<?php
namespace Core\Model;

interface ModelCriteriaInterface {

    public function findBy(array $criteria = []): array;
    public function findOneBy(array $criteria = []): object;
}