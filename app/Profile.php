<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];
   public function user()
   {
   		return $this->belongsTo(User::class);
   }

    public function followers()
   {
   		return $this->belongsToMany(User::class);
   }

   public function profileImage(){
   	$imagePath = $this->image ? $this->image : 'uploads/O9t7gl29b7X57vrYSmYwY021bdZPECHEepd4cNit.png';
   	return '/storage/'.$imagePath;
   }
}
