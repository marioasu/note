~/.ssh/config
=======
Host host_alias
    HostName host_addr
    User username

A机免密码登录B机
=======
A
-------
ssh-keygen -t rsa -P ''
scp ~/.ssh/id_rsa.pub username@B:/home/username
B
-------
cat ~/id_rsa.pub >> ~/.ssh/authorized_keys
-- if necessary
chmod ~ 755
chmod 700 ~/.ssh
chmod 644/600 ~/.ssh/authorized_keys

