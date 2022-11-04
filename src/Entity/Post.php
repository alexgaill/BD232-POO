<?php
namespace App\Entity;

final class Post {

    private int $id;

    private string $title;

    private string $content;

    private string|\DateTime $created_at;

    private Category $category;

    public function __construct()
    {
        if (isset($this->categoryId) && isset($this->name)) {
            $this->category = new Category;
            $this->category->hydrateCategory([
                "categoryId" => $this->categoryId,
                'name' => $this->name
            ]);
            unset($this->categoryId);
            unset($this->name);
        }
        // var_dump($this);
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     * Design pattern => fluent
     * 
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of created_at
     *
     * @return string
     */
    public function getCreatedAt(): string|\DateTime
    {
        // return $this->DateStringify($this->created_at);
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @param string|\DateTime $created_at
     *
     * @return self
     */
    public function setCreatedAt(string|\DateTime $created_at): self
    {
        $this->created_at = $this->DateStringify($created_at);

        return $this;
    }

    /**
     * Transforme la date en chaine de caractères
     *
     * @param string|\DateTime $created_at
     * @return string
     */
    private function DateStringify(string|\DateTime $created_at): string
    {
        // instanceof vérifie qu'un objet est une instance d'une classe (new Class)
        if ($created_at instanceof \DateTime) {
            $created_at = $created_at->format('Y-m-d H:i:s');
        }
        return $created_at;
    }

    /**
     * Get the value of category
     *
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @param Category $category
     *
     * @return self
     */
    public function setCategory(Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}