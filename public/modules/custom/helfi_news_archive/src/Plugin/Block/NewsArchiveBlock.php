<?php

declare(strict_types = 1);

namespace Drupal\helfi_news_archive\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Block for rendering the news archive react app.
 *
 * @Block(
 *   id = "news_archive_block",
 *   admin_label = @Translation("News archive"),
 *   category = @Translation("HELfi News Archive")
 * )
 */
class NewsArchiveBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      '#markup' => '<div id="helfi-etusivu-news-search"></div>',
      '#attached' => [
        'library' => [
          'helfi_news_archive/news-archive',
        ],
      ],
    ];
    return $build;
  }

}
