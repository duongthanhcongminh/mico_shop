<?php

namespace App\Repositories\Blog;

use App\Models\Blog;
use App\Repositories\BaseRepository;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
    public function getModel(): string
    {
        return Blog::class;
    }

    public function getLastesBlog($limit = 3)
    {
        return $this->model->orderBy('id','desc')
            ->limit($limit)
            ->get();
    }
}
