<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('users', function (Blueprint $table) {
    $table->increments('id');
    $table->string('username');
    $table->string('email')->unique();
    $table->string('password');
    $table->tinyInteger('admin');
    $table->timestamps();
});