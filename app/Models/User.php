<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'card',
        'image',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($input)
    {
        $this->attributes['id'] = $input;
    }
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($input)
    {
        $this->attributes['name'] = $input;
    }
    public function getEmail()
    {
        return $this->attributes['email'];
    }
    public function setEmail($input)
    {
        $this->attributes['email'] = $input;
    }
    public function getPhone()
    {
        return $this->attributes['phone'];
    }
    public function setPhone($input)
    {
        $this->attributes['phone'] = $input;
    }
    public function getCard()
    {
        return $this->attributes['card'];
    }
    public function setCard($input)
    {
        $this->attributes['card'] = $input;
    }
    public function getImage()
    {
        return $this->attributes['image'];
    }
    public function setImage($input)
    {
        $this->attributes['image'] = $input;
    }
    public function getPassword()
    {
        return $this->attributes['password'];
    }
    public function setPassword($input)
    {
        $this->attributes['password'] = Hash::make($input);
    }
    public function getRole()
    {
        return $this->attributes['role'];
    }
    public function setRole($input)
    {
        $this->attributes['role'] = $input;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($input)
    {
        $this->attributes['created_at'] = $input;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($input)
    {
        $this->attributes['updated_at'] = $input;
    }

    public function complaints(){
        return $this->hasMany(Complaint::class);
    }
    public function getComplaints(){
        return $this->complaints;
    }
    public function setComplaints($input){
        $this->complaints = $input;
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
