<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    private int $age = 0;
    private string $name = "";

    public function SetAge(int $age) : void
    {
        $this->age = $age;
    }

    public function GetAge() : int
    {
        return $this->age;
    }

    public function GetName() : string
    {
        return $this->name;
    }

    public function SetName(string $pName) : void
    {
        $this->name = $pName;
    }
}
