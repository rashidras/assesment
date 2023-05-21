<?php

namespace App\Repositories\User;

use App\Models\User;


interface UserRepositoryInterface
{

  /**
   * Retrive All User As List
   * 
   * @return Collection $user
   */

  public function getUser();

}
