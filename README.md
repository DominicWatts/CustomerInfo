# Magento 2 Additional Customer Info #

Magento 2 additional info on customer grid - last logged in and last order date 

# Install instructions #

`composer require dominicwatts/customerinfo`

`php bin/magento setup:upgrade`

`php bin/magento setup:di:compile`

# Usage instructions #

Additional columns appear in admin grid

![Screenshot](https://i.snipboard.io/UcAuO7.jpg)

Note: last order value will only come through if customer has logged in or record for login has not been wiped