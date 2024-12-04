<?php

namespace App\Traits\NoteTraits;

trait HasNote
{
    public function ownsThisNote($note): bool
    {
        return $this->id === $note->user->id;
    }
}
