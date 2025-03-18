<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Sushi\Sushi;
class Post extends Model
{
    use HasFactory, Sushi;

    protected $rows = [
        [
            'id' => 1,
            'is_archived' => false,
            'title' => 'Fuga atque inventore aut minima totam necessitatibus qui.',
            'content' => 'Inventore qui iusto voluptas facilis. Cumque consequatur aliquam exercitationem ut possimus beatae.',
        ],
        [
            'id' => 2,
            'is_archived' => false,
            'title' => 'Quisquam et quia et.',
            'content' => 'Quisquam et quia et.',
        ],
        [
            'id' => 3,
            'is_archived' => false,
            'title' => 'Quisquam et quia et.',
            'content' => 'Quisquam et quia et.',
        ],
        [
            'id' => 4,
            'is_archived' => false,
            'title' => 'Quisquam et quia et.',
            'content' => 'Quisquam et quia et.',
        ],
        [
            'id' => 5,
            'is_archived' => false,
            'title' => 'Quisquam et quia et.',
            'content' => 'Quisquam et quia et.',
        ],
        [
            'id' => 6,
            'is_archived' => false,
            'title' => 'Quisquam et quia et.',
            'content' => 'Quisquam et quia et.',
        ],
    ];
    public function archive()
    {
        $this->is_archived = true;
        $this->save();
    }

    protected $guarded = [];
}
