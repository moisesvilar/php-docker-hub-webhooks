nohup php -S 0.0.0.0:8000 > phpd.log 2>&1 &
echo $! > save_pid