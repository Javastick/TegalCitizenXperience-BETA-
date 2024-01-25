<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected function validate($request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['nullable', 'string', 'max:1500'],
            'image' => ['image'],
        ]);
    }
    protected $fillable = [
        'title',
        'category',
        'content',
        'location',
        'image',
        'user_id',
    ];

    public function getId(){
        return $this->attributes['id'];
    }
    public function setId($input){
        $this->attributes['id'] = $input;
    }
    public function getTitle(){
        return $this->attributes['title'];
    }
    public function setTitle($input){
        $this->attributes['title'] = $input;
    }
    public function getContent(){
        return $this->attributes['content'];
    }
    public function getContentHalf(){
        $content = $this->attributes['content'];
        $halfContent = substr($content, 0, 180);
        return $halfContent;
    }
    public function setContent($input){
        $this->attributes['content'] = $input;
    }
    public function getLocation(){
        return $this->attributes['location'];
    }
    public function setLocation($input){
        $this->attributes['location'] = $input;
    }
    public function getCategory(){
        return $this->attributes['category'];
    }
    public function setCategory($input){
        $this->attributes['category'] = $input;
    }
    public function getImage(){
        return $this->attributes['image'];
    }
    public function setImage($input){
        $this->attributes['image'] = $input;
    }
    
    public function getCreatedAt(){
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($input){
        $this->attributes['created_at'] = $input;
    }
    public function getUpdatedAt(){
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($input){
        $this->attributes['updated_at'] = $input;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getUser(){
        return $this->user;
    }
    public function setUser($input){
        $this->user = $input;
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function getComments(){
        return $this->comments;
    }
    public function setComments($input){
        $this->comments = $input;
    }
    
}
