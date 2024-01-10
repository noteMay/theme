<?php
/**
 * 文章存档
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

<!-- 文章归档 #main-->
<div class="col-md-12 text-center">
            <h2>文章归档</h2>
    </div>
    <div class="col-mb-12 col-8" id="main" role="main">
        <article class="page-wrapper" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="post-content" itemprop="articleBody">
                <?php
                $stat = Typecho_Widget::widget('Widget_Stat');
                Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize='.$stat->publishedPostsNum)->to($archives);
                $year=0; $mon=0; $i=0; $j=0;
                $output = '<div class="archives">';
                while($archives->next()){
                    $year_tmp = date('Y',$archives->created);
                    $mon_tmp = date('m',$archives->created);
                    $y=$year; $m=$mon;
                    if ($year > $year_tmp || $mon > $mon_tmp) {
                        $output .= '</ul></div>';
                    }
                    if ($year != $year_tmp || $mon != $mon_tmp) {
                        $year = $year_tmp;
                        $mon = $mon_tmp;
                        $output .= '<div class="archives-item"><h3>'.date('Y年m月',$archives->created).'</h3><ul class="archives_list">'; //输出年份
                    }
                    $output .= '<li>'.date('d日',$archives->created).' <a href="'.$archives->permalink .'">'. $archives->title .'</a></li>'; //输出文章
                }
                $output .= '</ul></div></div>';
                echo $output;
                ?>
            </div>
        </article>
    </div></div>
<!-- 文章归档 #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>