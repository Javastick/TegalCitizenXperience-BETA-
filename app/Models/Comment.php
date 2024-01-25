<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'user_id',
        'complaint_id'
    ];

    public function getContent(){
        return $this->attributes['content'];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($input)
    {
        $this->user = $input;
    }

    public function complaint(){
        return $this->belongsTo(Complaint::class);
    }
    function getComplaint()
    {
        return $this->complaint;
    }
    public function setComplaint($input)
    {
        $this->complaint = $input;
    }
}
