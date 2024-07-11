<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
  use HasFactory;
  protected $fillable = ['title', 'salary', 'employer_id', 'description'];

  public function employer()
  {
    return $this->belongsTo(Employer::class);
  }

  public function tag()
  {
    return $this->belongsToMany(Tag::class);
  }
}
