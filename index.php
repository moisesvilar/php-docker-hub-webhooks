<?php
  $trigger_tag = "latest";
  $post_data = json_decode(file_get_contents('php://input'), true);
  $tag = $post_data["push_data"]["tag"];
  if ($tag === $trigger_tag) {
    $image = "user/repo:" . $trigger_tag;
    echo `docker pull "$image"`;
    echo `deploy_my_server.sh`;
  } else {
    echo "Ignoring tag " . $tag;
  }
