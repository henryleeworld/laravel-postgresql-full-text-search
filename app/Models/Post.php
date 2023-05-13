<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'searchable',
    ];

    /*
    public function searchableOptions()
    {
        return [
            // You may wish to change the default name of the column
            // that holds parsed documents
            'column' => 'indexable',
            // You may want to store the index outside of the Model table
            // In that case let the engine know by setting this parameter to true.
            'external' => true,
            // If you don't want scout to maintain the index for you
            // You can turn it off either for a Model or globally
            'maintain_index' => true,
            // Ranking groups that will be assigned to fields
            // when document is being parsed.
            // Available groups: A, B, C and D.
            'rank' => [
                'fields' => [
                    'title' => 'A',
                    'content' => 'B',
                    'author' => 'D',
                    'tags' => 'C',
                ],
                // Ranking weights for searches.
                // [D-weight, C-weight, B-weight, A-weight].
                // Default [0.1, 0.2, 0.4, 1.0].
                'weights' => [0.1, 0.2, 0.4, 1.0],
                // Ranking function [ts_rank | ts_rank_cd]. Default ts_rank.
                'function' => 'ts_rank_cd',
                // Normalization index. Default 0.
                'normalization' => 32,
            ],
            // You can explicitly specify a PostgreSQL text search configuration for the model.
            // Use \dF in psql to see all available configurationsin your database.
            'config' => 'simple',
        ];
    }
    */

    /*
    public function searchableAdditionalArray()
    {
        return [
            'user_id' => $this->user_id,
        ];
    }
    */

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
        ];
    }
}
