@component('mail::message')
# Your Artcile Has Been Commented

{{ $commenter->name }} Commented On Your Post

@component('mail::button', ['url' => route('article_object' , $article->id )])
View Article
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
