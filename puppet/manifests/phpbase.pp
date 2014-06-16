# Enable XDebug ("0" | "1")
$use_xdebug = "0"

# Default path
Exec 
{
  path => ["/usr/bin", "/bin", "/usr/sbin", "/sbin", "/usr/local/bin", "/usr/local/sbin"]
}

exec 
{ 
    'apt-get update':
        command => '/usr/bin/apt-get update',
        require => Exec['add php55 apt-repo']
}

exec
{
    'apt-get install dos2unix':
        command => '/usr/bin/apt-get install dos2unix'
}

exec
{
    'dos2unix tests.sh':
        command => 'dos2unix /var/www/public/global-phone-numbers/tests.sh',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix unitTest.sh':
        command => 'dos2unix /var/www/public/global-phone-numbers/unitTest.sh',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix Main.php':
        command => 'dos2unix /var/www/public/global-phone-numbers/Main.php',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix MainRPC.php':
        command => 'dos2unix /var/www/public/global-phone-numbers/MainRPC.php',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix Client.php':
        command => 'dos2unix /var/www/public/global-phone-numbers/Client.php',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix index.php':
        command => 'dos2unix /var/www/public/global-phone-numbers/index.php',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix compute.php':
        command => 'dos2unix /var/www/public/global-phone-numbers/compute.php',
        require => Exec['apt-get install dos2unix']
}


exec
{
    'dos2unix UnitTest.php':
        command => 'dos2unix /var/www/public/global-phone-numbers/UnitTest.php',
        require => Exec['apt-get install dos2unix']
}


exec
{
    'dos2unix Config.php':
        command => 'dos2unix /var/www/public/global-phone-numbers/lib/Config.php',
        require => Exec['apt-get install dos2unix']
}


exec
{
    'dos2unix DBConfig2.php':
        command => 'dos2unix /var/www/public/global-phone-numbers/lib/DBConfig2.php',
        require => Exec['apt-get install dos2unix']
}

include other #curl
include php55 #specific setup steps for 5.5
include php
include apache
include mysql
include phpmyadmin
include composer
