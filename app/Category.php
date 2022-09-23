<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $categories;

    protected $fillable = [
        'name',
        'unit',
        'parent_id'
    ];

    public static function getHierarchy(): array
    {
        return (new self())->getCategories();
    }

    private function getCategories(): array
    {
        $mainCategories = self::where('parent_id', 0)->get();

        foreach ($mainCategories as $category) {
            $this->categories[] = $category->toArray();
            $this->getParentCategories($category, 0);
        }

        return $this->categories;
    }

    private function getParentCategories($category, $level)
    {
        if ($subCategories = $category->hasSubCategories) {
            $level++;
            foreach ($subCategories as $subCategory) {
                $subCategory->name = str_repeat('&emsp;', $level) . $subCategory->name;
                $this->categories[] = $subCategory;
                $this->getParentCategories($subCategory, $level);
            }
        }
    }

    public function hasSubCategories()
    {
        return $this->hasMany($this, 'parent_id', 'id');
    }
}
