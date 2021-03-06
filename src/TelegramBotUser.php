<?php

namespace SumanIon\TelegramBot;

use Illuminate\Database\Eloquent\Model;

class TelegramBotUser extends Model
{
    use Support\ManagesBotUserPermissions;

    /** @var array */
    protected $fillable = [
        'telegram_bot_id',
        'chat_id',
        'first_name',
        'last_name',
        'username'
    ];
}