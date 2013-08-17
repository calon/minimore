<div id="sidebar">

<?php // 如果没有使用 Widget 才显示以下内容, 否则会显示 Widget 定义的内容
if ( !dynamic_sidebar() ) :
?>
    <ul>
        <li><a href="http://example.com/about/">about</a></li>
    </ul>
<?php endif; ?>
</div>

