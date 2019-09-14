<?php
  class Render {

    static function get_buffer ($callback) {
      ob_start();
      $callback();
      $content = ob_get_contents();
      ob_end_clean();

      return $content;
    }

    static function code_wrap ($callback, $language = "php") {
      $content = self::get_buffer($callback);

      return <<<EOF
        <pre class="line-numbers">
          <code class="language-{$language}">
            {$content}
          </code>
        </pre>
      EOF;
    }

    static function build_tab_data ($title, $content, $code_wrap = true) {
      $content = $code_wrap ? self::code_wrap($content) : self::get_buffer($content);
      return ["title" => $title, "content" => $content];
    }

    static function tab_system ($items) {
      $tab_menu = ['<ul class="nav nav-tabs">'];
      $tab_content = ['<div class="tab-content">'];
      $first = true;

      foreach ($items as $item) {
        extract($item); // title, content
        $uuid = uniqid();

        $tab_menu[] = '<li class="nav-item '.($first ? 'active' : null).'">';
        $tab_menu[] = '<a class="nav-link '.($first ? 'active' : null).'" data-toggle="tab" href="#a'.$uuid.'">'.$title.'</a>';
        $tab_menu[] = '</li>';

        $tab_content[] = '<div id="a'.$uuid.'" class="tab-pane fade '.($first ? 'show active' : null).'">';
        $tab_content[] = $content;
        $tab_content[] = '</div>';

        $first = false;
      }
      $tab_menu[] = '</ul>';
      $tab_content[] = '</div>';

      return (implode("", $tab_menu) . implode("", $tab_content));
    }

  }

?>