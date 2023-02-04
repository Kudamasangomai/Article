<?php

namespace App\Mail;

use App\Models\Article;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Article_Commented extends Mailable
{
    use Queueable, SerializesModels;

    public $commenter;
    public $article;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $commenter,Article $article)
    {
        $this->commenter =$commenter;
        $this->article = $article;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('article.article_commented')
                    ->subject('New Comment on Your Article');
    }
}
