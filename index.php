<?php
  // $expectedKey = 'EXPECTED_KEY';
  // $trigger_tag = 'expectedTag';
  // $repo = 'user/repo';
  $requestKey = $_GET['k'];
  if ($expectedKey !== $requestKey) {
    echo "Unauthorized";
    exit(-1);
  }
  $post_data = json_decode(file_get_contents('php://input'), true);
  $tag = $post_data["push_data"]["tag"];
  if ($tag === $trigger_tag) {
    echo `update-docker.sh`;
  } 
  else {
    echo "Ignoring tag " . $tag;
  }
