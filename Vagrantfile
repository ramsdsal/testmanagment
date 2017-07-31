Vagrant.configure(2) do |config|

    config.vm.box = "ubuntu/xenial64"
    config.vm.box_check_update = true
    config.vm.hostname = "phalcon-vm"

    config.vm.network :forwarded_port, guest: 80, host: 8080    

    config.vm.network "private_network", ip: "192.168.3.3"

    config.vm.provider :virtualbox do |v|
        v.customize ["modifyvm", :id, "--memory", "2048"]
        v.customize ["modifyvm", :id, "--vram", "32"]
    end    
   
    config.vm.synced_folder "www/", "/var/www", 
        owner: "www-data", 
        group: "www-data",
        mount_options: ["dmode=775,fmode=664"]

    config.vm.provision "shell", path: "./scripts/setup.sh"    
end