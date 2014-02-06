<?php
function generate_pattern($requested_pattern = 1, $repeat = 100) {
  $pattern = array(1, 0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0);
  if ($requested_pattern == 3) {
    $pattern = array(1, 0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0);
  }
  $html = '';
  if ($requested_pattern == 2) {
    $html = '<div class="pattern-div pattern-on"></div><div class="pattern-div pattern-off"></div>';
  }
  for($i=0;$i<$repeat;$i++) {
    $start = TRUE;
    foreach ($pattern as $beat) {
      $classes = array();
      $classes[] = ($beat) ? 'pattern-on' : 'pattern-off';
      if ($start) {
        $classes[] = 'start';
      }
      $html .= '<div class="pattern-div ' . implode(' ', $classes) . '"></div>';
      $start = FALSE;
    }
  }
  return '<div class="pattern-container">' . $html . '</div>';
}
?>
