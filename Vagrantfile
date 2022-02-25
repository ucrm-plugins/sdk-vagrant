# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vagrant.plugins = [ "vagrant-env" ]
    config.env.enable

    UISP_VERSION = ENV["UISP_VERSION"] || "1.4.2"
    ROOT_PASSWORD = ENV["ROOT_PASSWORD"] || "vagrant"

    # Set the VM's network type to private and assign a static IP address.
    #config.vm.network "private_network", ip: "192.168.50.10"

    # Forward the necessary ports to the box.
    config.vm.network "forwarded_port", guest: 80, host: 80, host_ip: "127.0.0.1"
    config.vm.network "forwarded_port", guest: 443, host: 443, host_ip: "127.0.0.1"

    # Disable the default synced folder.
    config.vm.synced_folder ".", "/vagrant", disabled: true

    # Set the base for our UISP box.
    config.vm.box = "bento/ubuntu-20.04"

    # VirtualBox VM Configuration.
    config.vm.provider "virtualbox" do |vm|
        vm.name = "uisp-#{UISP_VERSION}"

        # NOTE: Set the following to suit your needs and based upon available host resources.
        vm.cpus = 2
        vm.memory = 4096
    end

    # Provision the VM.
    config.vm.provision "shell", keep_color: true, inline: <<-SHELL

        # Change the root password.
        echo "root:#{ROOT_PASSWORD}" | sudo chpasswd

        echo -n "Disabling IPv6..."
        echo "net.ipv6.conf.all.disable_ipv6 = 1" >> /etc/sysctl.conf
        echo "net.ipv6.conf.default.disable_ipv6 = 1" >> /etc/sysctl.conf
        echo "net.ipv6.conf.lo.disable_ipv6 = 1" >> /etc/sysctl.conf
        echo "net.ipv6.conf.eth0.disable_ipv6 = 1" >> /etc/sysctl.conf
        sysctl -p

        echo "Installing UISP..."
        curl -fsSL https://uisp.ui.com/v1/install > /tmp/uisp_inst.sh
        sudo bash /tmp/uisp_inst.sh --version #{UISP_VERSION}

    SHELL

end
