<?php
class Courses{
    public string $title;
    public string $subtitle;
    public string $description;
    public string $image;
    public string $createdAt;
    public string $creatorId;
    public int $categoryId;

    public function __construct(string $title, string $subtitle, string $description, string $image, $createdAt, $creatorId, int $categoryId){
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->image = $image;
        $this->createdAt = date('Y-m-d');
        $this->creatorId = $creatorId;
        $this->categoryId = $categoryId;
    }
}
?>