<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\User\UserRepository;

class User extends Model implements UserRepository {

}