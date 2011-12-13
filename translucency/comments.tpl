{foreach from=$comments item=comment}
<a id="c{$comment.id}"></a>
    <div class="serendipity_comment serendipity_comment_author_{$comment.author|@makeFilename} {if $entry.author == $comment.author}serendipity_comment_author_self{/if}" style="padding-left: {$comment.depth*20}px">
		<div class="commentwrap">
        <div class="serendipity_comment_source">
            <a href="#c{$comment.id}" title="Link to comment #{$comment.trace}">{$comment.trace}</a>
            
		<br />
        </div>
        <div class="serendipity_commentBody">{$comment.body}</div>
        <div class="serendipity_commentFooter">{if $comment.email}
                <a href="mailto:{$comment.email}">{$comment.author|@default:$CONST.ANONYMOUS}</a>
            {else}
                
            {/if}
            {if $comment.url}
               <a href="{$comment.url}" title="{$comment.url|@escape}">{$comment.author|@default:$CONST.ANONYMOUS}</a>
            {/if}
            
            
            {if $entry.is_entry_owner}
                (<a href="{$comment.link_delete}" onclick="return confirm('{$CONST.COMMENT_DELETE_CONFIRM|@sprintf:$comment.id:$comment.author}');">delete</a>)
            {/if}
            {if $entry.allow_comments}
                (<a href="#serendipity_CommentForm" onclick="document.getElementById('serendipity_replyTo').value='{$comment.id}';">{$CONST.REPLY}</a>)
            {/if}{$CONST.ON} {$comment.timestamp|@formatTime:DATE_FORMAT_ENTRY}</div>
        </div>
        
        
    </div>
{foreachelse}
    <div class="serendipity_center">{$CONST.NO_COMMENTS}</div>
{/foreach}
