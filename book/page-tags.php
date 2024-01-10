<?php
/**
 * 标签模板
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
<!-- 编辑 #main-->
<?php if($this->user->hasLogin()):?>
      <a href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?>" target="_blank">编辑</a>
    <?php endif;?>
<!-- 编辑 #main-->

<!-- 分类 #main-->
<div class="col-mb-12 col-8 text-center" id="main" role="main">
        <h2>分类</h2>
</div>
<div class="col-mb-12 col-8" id="main" role="main">
    <div class="page-wrapper">
        <div class="categary-wrapper">
            <div class="categary-content" itemprop="articleBody">
                <div class="categary-list">
                    <?php $this->widget('Widget_Metas_Category_List')->parse('<div class="col-md-3 categary-item-wrapper"><div class="categary-item" ><a class="categary-item-link" href="{permalink}"> {name} ·  ({count})</a></div></div>'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 分类 #main-->

<!-- 标签 #main-->
<div class="col-mb-12 col-8 text-center" id="main" role="main">
        <h2>标签</h2>
</div>
<div class="col-mb-12 col-8" id="main" role="main">
    <div class="page-wrapper">
        <div class="tags-wrapper" >
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0')->to($tags); ?>
            <?php if($tags->have()): ?>
            <div class="tags-list">
                <?php while ($tags->next()): ?>
                    <div class="col-md-2 tag-item"><a href="<?php $tags->permalink(); ?>" rel="tag" class="size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?> (<?php $tags->count(); ?>)</a></div>
                <?php endwhile; ?>
                <?php else: ?>
                    <div><?php _e('没有任何标签'); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div><!-- end #main-->
</div></div>
<!-- 标签 #main-->


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>