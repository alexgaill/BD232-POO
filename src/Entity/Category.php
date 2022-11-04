<?php
namespace App\Entity;

class Category {

    /**
     * Id de la catégory
     * Il doit être PRIMARY KEY NOT NULL
     *
     * @var integer
     */
    private int $id;

    /**
     * Nom de la catégorie
     * UNIQUE string 65
     *
     * @var string
     */
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function hydrateCategory(array $data)
    {
        if (isset($data['categoryId'])) {
            $this->id = $data['categoryId'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }
}