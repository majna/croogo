<?php
    echo $rss->header();
    if (!isset($channel)) {
        $channel = array();
    }
    if (!isset($channel['title'])) {
        $channel['title'] = $title_for_layout . ' - ' . Configure::read('Site.title');
    }
?>
<?php echo '<?'; ?>xml-stylesheet type="text/xsl" href="<?php echo $rss->webroot('css/feed.xsl') ?>" ?>
<?php
    $channelEl = $rss->channel(array(), $channel, $items);
    echo $rss->document(array(), $channelEl);
?>