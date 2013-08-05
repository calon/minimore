<div id="sidebar">

<?php // 如果没有使用 Widget 才显示以下内容, 否则会显示 Widget 定义的内容
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :
?>
    <ul>
        <li><a href="http://example.com/about/">about</a></li>
        <li><a href="http://example.com/best-posts/">best posts</a></li>
        <li><a href="http://example.com/links/">links</a></li>
        <li><a href="http://feeds.feedburner.com/example">rss</a> | <a href="http://feedburner.google.com/fb/a/mailverify?uri=example&amp;loc=en_US">email</a></li>
    </ul>
<?php endif; ?>
</div>

