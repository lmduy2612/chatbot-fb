<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class ExampleConversation extends Conversation
{
    /**
     * askReason question
     */
    public function askReason()
    {
        $botman = resolve('botman');

        $question = Question::create('Do you agree with me?')
            ->callbackId('agree')
            ->addButtons([
                Button::create('Yes')->value('yes'),
                Button::create('No')->value('no'),
            ]);

        $botman->ask($question, function (Answer $answer) {
            $this->say('Hi');
        });
    }

    /**
     * Run
     */
    public function run()
    {
        $this->askReason();
    }
}
