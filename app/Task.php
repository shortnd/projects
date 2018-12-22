<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = ['id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function complete($completed = true)
    {
        $this->update([ 'completed' => $completed ]);
    }

    public function incomplete()
    {
        $this->complete(false);
    }
}
