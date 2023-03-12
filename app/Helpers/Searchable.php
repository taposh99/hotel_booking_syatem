<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Builder;

trait Searchable
{   
    /**
     * @param Eloquent Builder $query
     * 
     * @param Searchable Columns
     */
    public function scopeSearch(Builder $query, array $columns)
    {
        return $query->when(request()->get('q'),function(Builder $q) use ($columns) {
          $q->whereLike($columns, request()->get('q'));
        });
    }
}