<?php


function check_ability($ability)
{
    $auth = Illuminate\Support\Facades\Auth::class;
    if ($auth::check()) {
        $user = $auth::user();
        $super = (array)env_array('SUPER_IDS');
        if (in_array($user->id, $super)) {
            return true;
        }
        return in_array($ability, $user->abilities()->toArray());
    }
    return false;
}

function ulog($category, $content)
{
    $user_id = auth()->id();
    Manager\Models\Ulog::create([
        'user_id' => $user_id,
        'category' => $category,
        'content' => $content
    ]);
}

function percentage()
{
    $percentage = 50;
    return $percentage.'%';
}
