<?php
  $trigger_tag = "master";
  $post_data = json_decode($HTTP_RAW_POST_DATA, true);
  $tag = $post_data["push_data"]["tag"];
  if ($tag === $trigger_tag) {
    $image = "user/repo:" . $trigger_tag;
    echo `docker pull "$image"`;
    echo `deploy_my_server.sh`;
  } else {
    echo "Ignoring tag " . $tag;
  }
