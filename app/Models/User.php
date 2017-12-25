<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use ModelTrait;

    protected $table = 'users';
    protected $guarded = ['id'];

    public $timestamps = true;

    public function token()
    {
        return $this->hasOne(Token::class);
    }
}
