<?php
  $trigger_tag = "latest";
  $repo = "moisesvilar/queseriabarral";
  $post_data = json_decode(file_get_contents('php://input'), true);
  $tag = $post_data["push_data"]["tag"];
  if ($tag === $trigger_tag) {
    echo `/root/update-docker.sh`;
  } 
  else {
    echo "Ignoring tag " . $tag;
  }
