<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    protected $table='blog_comments';
    protected $primaryKey='id';
    protected $guarded=[];

    public function blogs() {
    	return $this->belongsTo(related: Blog::class, foreignKey: 'blog_id', ownerKey: 'id');
    }
}
