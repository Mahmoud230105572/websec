<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable; // ✅ Use this instead of Model
    use Spatie\Permission\Traits\HasRoles;


    class User extends Authenticatable {
        use HasFactory;
        use HasRoles;


    }
