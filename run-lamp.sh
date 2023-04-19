# Start docker
sudo docker start

# Kill all running containers
containers=$(docker ps -q)
docker kill $containers

# Start lamp and proxy server
sudo docker start lamp
sudo docker start proxy-ssl