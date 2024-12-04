<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NotePolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Note $note): bool
    {
        return $user->ownsThisNote($note);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function destroy(User $user, Note $note): bool
    {
        return $user->ownsThisNote($note);
    }
}
