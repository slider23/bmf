<? if( empty($posts) ) return; ?><? echo '<?xml version="2.0" encoding="utf-8" ?>'."\n"; ?>
<rss version="2.0">
  <channel>
    <title>Gems from Hell</title>
    <link>http://gemsfromhell.com/</link>
    <description>Gems from Hell - обзор Ruby gem библиотек</description>
    <language>ru-RU</language>
    <pubDate><?= gmdate(DATE_RSS, strtotime($posts[0]['added_at'])) ?></pubDate>
    <lastBuildDate><?= gmdate(DATE_RSS, strtotime($posts[0]['added_at'])) ?></lastBuildDate>
    <docs>http://gemsfromhell.com</docs>
    <generator>BMFOpenSource</generator>
    <managingEditor>info@mrak7.com</managingEditor>
    <webMaster>info@mrak7.com</webMaster>

  <? foreach( $posts as $post ){ ?>
    <item>
      <title><?= form_prep( $post['title'] ) ?></title>
      <link>http://gemsfromhell.com<?= post_link( $post ) ?></link>
      <description><?= form_prep( $post['description'] )?></description>
      <pubDate><?= gmdate(DATE_RSS, strtotime($post['added_at'])) ?></pubDate>
      <guid>http://gemsfromhell.com<?= post_link( $post ) ?></guid>
    </item>
  <? } ?>
  </channel>
</rss>