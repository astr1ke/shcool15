@foreach($items as $item)

<li id="li-comment-{{$item->id}}" class="comment">
	<div id="comment-{{$item->id}}" class="comment-container">
		<div class="comment-author vcard">
			<img alt="" src="https://www.gravatar.com/avatar/{{md5($item->email)}}?d=mm&s=75" class="avatar" height="75" width="75" />
			<cite class="fn">{{$item->user}}</cite>
		</div>

		<div class="comment-meta commentmetadata">
			<div class="intro">
				<div class="commentDate">
					{{ is_object($item->created_at) ? $item->created_at->format('d.m.Y в H:i') : ''}}                     
				</div>

			</div>
			<div class="comment-body">
				<p>{{ $item->text }}</p>
			</div>
			<div class="reply group">
				<a class="comment-reply-link" href="#respond" onclick="return addComment.moveForm(&quot;comment-{{$item->id}}&quot;,&quot;{{$item->id}}&quot;,&quot;respond&quot;,&quot;{{$item->article_id}}&quot;)">Ответить</a>
				<?
				if(\Illuminate\Support\Facades\Auth::check()){
				if((\Illuminate\Support\Facades\Auth::user()->IsAdmin == 1) or
				((\Illuminate\Support\Facades\Auth::user()->name == $item->user)and
				($item->text != 'Пользователь удалил свой комментарий'))){
					echo ("<a class=\"comment-reply-link\" href=\"#respond\" onclick=\"return delComment.updForm(&quot;$item->id&quot;)\">Удалить</a>");
				}
				}
				?>
			</div>
	</div>

	@if(isset($com[$item->id]))
	<ul class="children">
		@include('comments.comment', ['items' => $com[$item->id]])
	</ul>
	@endif
	
</li>

@endforeach