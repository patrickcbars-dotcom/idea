<?php

use App\Models\Idea;
use App\Models\User;

test('it belongs to User', function () {

    $idea = Idea::factory()->create();

    expect($idea->user)->toBeInstanceOf(User::class);
});

test('it can have steps', function () {

    $idea = Idea::factory()->create();

    $idea->steps()->create([
        'description' => 'Do the thing',
    ]);

    expect($idea->fresh()->steps)->tohaveCount(1);
});
